<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();
        // return $todos;
        return view('todos.index',compact('todos'));
    }
    public function create(){
        return view('todos.create');
    }
    public function edit($id){
        // dd($id);
        $todo = Todo::find($id);
        // return $todo;
        return view('todos.edit',compact('todo'));
    }
    public function store(TodoCreateRequest $request){
        Todo::create($request->all());
        return redirect()->back()->with('message','ToDo Created Successfully');
    }

}
