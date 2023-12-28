<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>пример</title>
</head>
<body>
<h1>Имена</h1>
<a href="/admin">Назад</a><br><br>
<a href="/admin/users/create">Создать</a><br><br>

@foreach ($users as $key => $user)
    <a href='{{route('users.edit', $user)}}'> {{$user->firstname}} {{$user->lastname}}</a><br>
    <form action='{{route('users.destroy', $user)}}' method='POST'>
        @method('DELETE')
        @csrf
    <input type='submit' value='Удалить'>
    </form>
    <br>
@endforeach
</body>
</html>
