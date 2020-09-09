@extends('todos.layout')
@section('content')
<h3 class="text-2xl border-b pb-4">What do you want to do next</h3>
@include('layouts.flash')
<form action="{{route('todo.store')}}" method="post" class="py-5">
    @csrf
    <div class="py-1">
        <input type="text" name="title" class="p-2 border rounded" placeholder="Title">
    </div>
    <div class="py-1">
        <textarea name="description" class="p-2 rounded border" placeholder="Description"></textarea>
    </div>


    <div class="py-1">
        <input type="submit" value="Submit" class="p-2 border rounded">
    </div>

</form>
    @livewire('step')
<a href="{{route('todo.index')}}" class="m-5 py-1 bg-white-400 border cursor-pointer rounded text-black">Go Back</a>
@endsection
