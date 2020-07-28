<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tasks index</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body>
        @foreach ($tasks as $task)
            <h1>{{ $task->title}} </h1>
            <h1>{{ $task->date}} </h1>
            <form class="" action="{{route('user.update', $task->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="submit" value="Completato" class="btn btn-primary">
            </form>
        @endforeach

    </body>
</html>
