<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задать вопрос</title>
</head>
<body>
<h1>Задать вопрос</h1>
<form action="{{route('questions.store')}}" method="post">
    @csrf
    <input name="user" type="text" placeholder="Имя пользователя">
    <input name="question" type="text" placeholder="Ваш вопрос">
    <input type="submit">
</form>
</body>
</html>
