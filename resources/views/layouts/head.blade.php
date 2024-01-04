<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>панель навигации</title>
    <style>
        ul.nav{
            margin-left: 0px;
            padding-left: 0px;
            list-style: none;
        }
        .nav li{
            display: inline;
        }
        ul.nav a{
            display: inline-block;
            width: 5em;
            padding: 10px;
            background-color: #0a58ca;
            border: 1px dashed #1a202c;
            text-decoration: none;
            color: #1a202c;
            text-align: center;
        }
        ul.nav a:hover{
            background-color: #1a202c;
            color: #0a58ca;
        }
    </style>
</head>
<body>
<main class="py-4">
    @yield('content')
</main>
</body>
</html>
