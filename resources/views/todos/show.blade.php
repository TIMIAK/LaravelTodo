@extends('todos.layout')
@section('content')
<h3 class="text-2xl border-b pb-4">{{$todo->title}}</h3>

<div>
    <div>
    <p>{{$todo->description}}</p>
    </div>
</div>

<div>

    <a href="{{route('todo.index')}}" class="m-5 p-1 bg-white-400 border cursor-pointer rounded text-black">Go Back</a>
</div>

@endsection
