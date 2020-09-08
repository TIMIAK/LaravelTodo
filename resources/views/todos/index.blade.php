@extends('todos.layout')
@section('content')
<div class="flex justify-between border-b pb-4 px-4">
    <h3 class="text-2xl">All your Todos</h3>
    <a href="{{route('todo.create')}}" class="mx-5 py-1 bg-blue-400 cursor-pointer rounded text-white">Create New ToDo</a>
</div>
<ul class="my-5">
    @include('layouts.flash')
    @forelse($todos as $todo)
    <li class="flex justify-between py-2">
       <div>
        @include('todos.completeButton')
       </div>

        @if($todo->completed)
            <p class="line-through">{{$todo->title}}</p>
        @else
    <a class="cursor-pointer" href="{{route('todo.show',$todo->id)}}">{{$todo->title}}</a>
        @endif

        <div>
            <a href="{{route('todo.edit',$todo->id)}}" class="m-5 bg-orange-400 border cursor-pointer rounded text-black">Edit</a>
            <span class="m-5  bg-orange-400 border cursor-pointer rounded text-black" onclick="event.preventDefault();
               if(confirm('Are you sure?')){
                document.getElementById('form-delete-{{$todo->id}}')
                .submit()}"
            >Del</span>

            <form action="{{route('todo.destroy',$todo->id)}}" id="{{'form-delete-'.$todo->id}}" method="post" style="display: none">
                @csrf
                @method('delete')
            </form>
        </div>

    </li>
    @empty
        <p>No task available, Create one</p>
    @endforelse
</ul>
@endsection

