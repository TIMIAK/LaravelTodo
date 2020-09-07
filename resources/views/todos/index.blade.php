@extends('todos.layout')
@section('content')
<div class="flex justify-center border-b pb-4">
    <h3 class="text-2xl">All your Todos</h3>
    <a href="/todos/create" class="mx-5 py-1 bg-blue-400 cursor-pointer rounded text-white">Create New ToDo</a>
</div>
<ul class="my-5">
    @include('layouts.flash')
    @foreach($todos as $todo)
    <li class="flex justify-between py-2">
        <p>{{$todo->title}}</p>
    <a href="/todos/{{$todo->id}}/edit" class="m-5 p-1 bg-orange-400 border cursor-pointer rounded text-black">Edit</a>
    </li>
    @endforeach
</ul>
@endsection

