<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админ панель</title>
</head>
<body>
<h1>Вопросы</h1>
<table>
    <tr>
        <td>#</td>
        <td>пользователь</td>
        <td>вопрос</td>
        <td>Статус</td>
    </tr>
    @foreach($questions as $question)
        <tr>
            <td>{{$question->id}}</td>
            <td>{{$question->user}}</td>
            <td>{{$question->question}}</td>
            <td>{{$question->status}}</td>
            <td><a href="{{route('questions.edit',$question)}}">Ответить</a></td>
        </tr>
    @endforeach

</table>
</body>
</html>
