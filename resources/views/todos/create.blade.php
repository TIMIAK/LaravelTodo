<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
    <title>ToDo || Create</title>
</head>
<body>
    <div class="text-center pt-10">
        <h3 class="text-2xl">What do you want to do next</h3>
        <form action="/todos/create" method="post" class="py-5">
            @csrf
            <input type="text" name="title" class="p-2 border rounded">
            <input type="submit" value="Submit" class="p-2 border rounded">
        </form>
    </div>
</body>
</html>
