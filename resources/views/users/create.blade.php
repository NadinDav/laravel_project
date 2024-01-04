<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>пример</title>
</head>
<body>
@include('layouts.app')
<h1>Создать автора</h1>
<div class="max-w-7xl mx-auto p-4">
<a href="/admin/users">Назад</a><br><br>

<form action="{{route('users.store')}}" method="post">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Имя</span>
        <input type="text" name = "firstname" class="form-control" placeholder="Firstname" aria-label="firstname" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Фамилия</span>
        <input type="text" name = "lastname" class="form-control" placeholder="Lastname" aria-label="lastname" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Login</span>
        <input type="text" name = "login" class="form-control" placeholder="Login" aria-label="Login" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Email</span>
        <input type="text" name = "email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Password</span>
        <input type="text" name = "password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
    </div>

    <input type="submit" class="btn btn-primary" value="Создать">
</form>
@extends('layouts.defaults')
</div>
</body>
</html>
