<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Админ панель</title>
</head>
<body>
<div class="container">
    <h1 class="h1">Вопросы</h1>
    <table class="table table-hover">
        <tr>
            <td>#</td>
            <td>Пользователь</td>
            <td>Вопрос</td>
            <td>Статус</td>
            <td></td>
            <td></td>
        </tr>
        @foreach($questions as $question)
            <tr>
                <td>{{$question->id}}</td>
                <td>{{$question->user}}</td>
                <td>{{$question->question}}</td>
                <td>{{$question->status}}</td>
                <td><button class="btn btn-primary"><a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="{{route('questions.edit',$question)}}">Ответить</a></button></td>
                <td><form action="{{route('questions.destroy',$question)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-primary">Удалить</button>
                </form></td>
            </tr>
        @endforeach

    </table>
</div>

</body>
</html>
