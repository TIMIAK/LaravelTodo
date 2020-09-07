@extends('todos.layout')
@section('content')
<h3 class="text-2xl border-b pb-4">Update this To-Do List</h3>

@include('layouts.flash')
<form action="{{route('todo.update',$todo->id)}}" method="post" class="py-5">
    @csrf
    @method('patch')
    <input type="text" name="title" value="{{$todo->title}}" class="p-2 border rounded">
    <input type="submit" value="Update" class="p-2 border rounded">
</form>
<a href="/todos" class="m-5 py-1 bg-white-400 border cursor-pointer rounded text-black">Go Back</a>
@endsection
