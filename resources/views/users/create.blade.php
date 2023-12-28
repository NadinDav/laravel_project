<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>пример</title>
</head>
<body>
<h1>Создать автора</h1>
<a href="/admin/users">Назад</a><br><br>

<form action="{{route('users.store')}}" method="post">
    @csrf
    <label for="firstname">Имя</label>
    <input type="text" name="firstname"><br><br>

    <label for="lastname">Фамилия</label>
    <input type="text" name="lastname"><br><br>

    <label for="login">Логин</label>
    <input type="text" name="login"><br><br>

    <label for="login">email</label>
    <input type="text" name="email"><br><br>

    <label for="password">Пароль</label>
    <input type="password" name="password"><br><br>

    <input type="submit" value="Создать">
</form>
</body>
</html>
