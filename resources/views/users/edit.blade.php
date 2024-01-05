<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>{{$user->firstname}}</title>
</head>
<body>
@extends('layouts.app')

<h1>Обновить имя {{$user->firstname}} {{$user->lastname}}</h1>
<a href="/admin/users">Назад</a><br><br>

<form action="{{route('users.update', $user)}}" method="post">
    @method('PUT')
    @csrf
    <label for="firstname">Имя</label>
    <input type="text" name="firstname" value="{{$user->firstname}}"><br><br>

    <label for="lastname">Фамилия</label>
    <input type="text" name="lastname" value="{{$user->lastname}}"><br><br>

    <input type="submit" class="btn btn-primary" value="Обновить">
</form>
</body>
</html>
