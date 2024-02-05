<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questions</title>
</head>
<body>
<h1>Вопросы</h1>
<a href="{{route('questions.create')}}">Задать</a>
@foreach($questions as $question)
    <div>
        <p>{{$question->user}}</p>
        <p>{{$question->question}}</p>
        <p>{{$question->status}}</p>
        <textarea size="5px">{{$question->answer}}</textarea>
    </div>
@endforeach

</body>
</html>
