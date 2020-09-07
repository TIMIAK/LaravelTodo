@extends('todos.layout')
@section('content')
<div class="flex justify-between border-b pb-4 px-4">
    <h3 class="text-2xl">All your Todos</h3>
    <a href="/todos/create" class="mx-5 py-1 bg-blue-400 cursor-pointer rounded text-white">Create New ToDo</a>
</div>
<ul class="my-5">
    @include('layouts.flash')
    @foreach($todos as $todo)
    <li class="flex justify-between py-2">
        @if($todo->completed)
            <p class="line-through">{{$todo->title}}</p>
        @else
            <p>{{$todo->title}}</p>
        @endif
        <div>
            <a href="/todos/{{$todo->id}}/edit" class="m-5 p-1 bg-orange-400 border cursor-pointer rounded text-black">Edit</a>
            @if($todo->completed)
                <span onclick="event.preventDefault();document.getElementById('form-incomplete-{{$todo->id}}').submit()" class="m-5 p-1 bg-green-400 border cursor-pointer rounded">Done</span>
                <form action="{{route('todo.incomplete',$todo->id)}}" id="{{'form-incomplete-'.$todo->id}}" method="post" style="display: none">
                    @csrf
                    @method('delete')
                </form>
            @else
                <span onclick="event.preventDefault();document.getElementById('form-complete-{{$todo->id}}').submit()" class="m-5 p-1 bg-grey-400 border cursor-pointer rounded">Done</span>
                <form action="{{route('todo.complete',$todo->id)}}" id="{{'form-complete-'.$todo->id}}" method="post" style="display: none">
                    @csrf
                    @method('put')
                </form>
            @endif
        </div>
    </li>
    @endforeach
</ul>
@endsection

