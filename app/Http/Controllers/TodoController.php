<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class TodoController extends Controller
{
    public function index(){
        return view('todos.index');
    }
    public function create(){
        return view('todos.create');
    }
    public function edit(){
        return view('todos.edit');
    }
    public function store(Request $request){
        Todo::create($request->all());
        return redirect()->back()->with('message','ToDo Created Successfully');
    }

}
