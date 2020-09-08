<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    public function index(){
        $todos = auth()->user()->todos->sortBy('completed');
        // dd($todos);
        // return $todos;

        // $todos = Todo::orderBy('completed')->get();
        // $todos = Todo::all();
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
        // dd(auth()->user()->todos());
        auth()->user()->todos()->create($request->all());
        // Todo::create($request->all());
        return redirect()->back()->with('message','ToDo Created Successfully');
    }
    public function update(TodoCreateRequest $request, Todo $todo){
        $todo->update(['title'=>$request->title]);
        return redirect(route('todo.index'))->with('message','Todo Updated!!');
        // dd($request->all());
        //Update todo
    }
    public function complete(Todo $todo){
        $todo->update(['completed'=> true]);
        return redirect()->back()->with('message','Task Marked as Completed');
    }
    public function incomplete(Todo $todo){
        $todo->update(['completed'=> false]);
        return redirect()->back()->with('message','Task Marked as In-Completed');
    }
    public function destroy(Todo $todo){
        $todo->delete();
        return redirect()->back()->with('message','Task Deleted');
    }
}
