<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Create your task</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <form class="" action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <h4>Task info</h4>
                            <label for="task">task</label>
                            <input type="text" name="task" class="form-control" value="{{old('task')}}">
                        </div>

                        <div class="form-group">
                            <label for="priority">Priority</label>
                            <input type="number" name="priority" class="form-control" value="{{old('priority')}}">
                        </div>
                        <div class="form-group">
                            <label for="date">date</label>
                            <input type="number" name="date" class="form-control" value="{{old('date')}}">
                        </div>
                        <input type="submit" value="Salva" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
