<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Questions</title>
</head>
<body>
<div class="container">
    <h1>Вопросы</h1>
    <a href="{{route('questions.create')}}">Задать</a>
    <div class="accordion accordion-flush" id="accordionExample">
        <h3>Отвеченые вопросы</h3>
        @foreach($questions_ans as $question)
        <div class="accordion-item">
            <h2 class="accordion-header">

                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$question->id}}" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="container overflow-hidden text-center">
                        <div class="row justify-content-end">
                            <div class="col">
                                {{$question->question}}
                            </div>

                            <div class="col">
                                {{$question->status}}
                            </div>
                        </div>
                    </div>
                </button>
            </h2>
            <div id="collapse{{$question->id}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    {{$question->answer}}
                    <hr>
                    <div class="container overflow-hidden text-center">
                        <div class="row gx-5">
                            <div class="col">
                                {{$question->user}}
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    <hr>
    {{$questions_ans->links()}}

    </div>





</body>
</html>
