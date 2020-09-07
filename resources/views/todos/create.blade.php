@extends('todos.layout')
@section('content')
<h3 class="text-2xl border-b pb-4">What do you want to do next</h3>
@include('layouts.flash')
<form action="/todos/create" method="post" class="py-5">
    @csrf
    <input type="text" name="title" class="p-2 border rounded">
    <input type="submit" value="Submit" class="p-2 border rounded">
</form>
<a href="/todos" class="m-5 py-1 bg-white-400 border cursor-pointer rounded text-black">Go Back</a>
@endsection
