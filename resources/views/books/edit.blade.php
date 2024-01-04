<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>пример</title>
</head>
<body>
<h1>
    @include('layouts.app')
        {{$book->name}}
</h1>
<form action="{{route('books.update', $book)}}" method="post">
    @method('PUT')
    @csrf
    <input type="hidden" name="id" value="{{$book->id}}">
    <br>

    <label for="firstname">Имя</label>
    <input type="text" name="name" value="{{$book->name}}"><br><br>
    <input type="submit" value="Обновить">
</form>
@extends('layouts.defaults')
</body>
</html>

