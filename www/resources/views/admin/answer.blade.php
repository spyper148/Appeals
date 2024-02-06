<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ответить</title>
</head>
<body>
<h2>{{$question->question}}</h2>
<h3>{{$question->user}}</h3>
<form action="{{route('questions.update',$question)}}" method="post">
@csrf
    @method('put')
    <textarea name="answer" type="text">{{$question->answer}}</textarea>
    <input type="submit">
</form>
</body>
</html>
