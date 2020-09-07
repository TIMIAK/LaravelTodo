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
