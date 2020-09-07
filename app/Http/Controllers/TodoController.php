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
    public function edit(Todo $todo){
        // dd($todo->title);
        // $todo = Todo::find($id);
        // return $todo;
        return view('todos.edit',compact('todo'));
    }
    public function store(TodoCreateRequest $request){
        Todo::create($request->all());
        return redirect()->back()->with('message','ToDo Created Successfully');
    }
    public function update(TodoCreateRequest $request, Todo $todo){
        $todo->update(['title'=>$request->title]);
        return redirect(route('todo.index'))->with('message','Todo Updated!!');
        // dd($request->all());
        //Update todo
    }

}
