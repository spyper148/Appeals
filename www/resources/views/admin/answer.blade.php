<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Ответить</title>
</head>
<body>
<div class="container">
<h1>Ответить на вопрос</h1>
    <h2>Вопрос: {{$question->question}}</h2>
    <h3>Кто прислал: {{$question->user}}</h3>
    <form action="{{route('questions.update',$question)}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Ответ</label>
            <textarea class="form-control" rows="3" name="answer" type="text">{{$question->answer}}</textarea>
        </div>

        <input type="submit">
    </form>

</div>

</body>
</html>
