<!DOCTYPE html public "-//W3C//DTD HTML 4.01//EN" >
<html lang="ru">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>пример</title>
</head>
    <body>
<br>
<h1>Авторы</h1>

<b><a href='/login'>В админку</a></b>

@foreach($users as $key => $user)
    <ul><b><a href='index.php?id={{$user->id}}'>{{$user->firstname}} {{$user->lastname}} </a>
         @foreach($user->books as $book)
             <li>{{$book->name}}</li>
         @endforeach
        </b></ul>
@endforeach

</body>
</html>
