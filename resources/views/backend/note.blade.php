<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 8 Ajax CRUD Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 text-right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addTodoModal">Add Todo</button>
                </div>
            </div>
            <div class="row" style="clear: both;margin-top: 18px;">
                <div class="col-12">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Todo</th>
                            <th>Tag</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($todos as $todo)
                            <tr id="todo_{{$todo->id}}">
                                <td>{{ $todo->id  }}</td>
                                <td>{{ $todo->todo }}</td>
                                <td>{{ $todo->tag->name}}</td>
                                <td>
                                    <a data-id="{{ $todo->id }}" onclick="editTodo(event.target)" class="btn btn-info">Edit</a>
                                    <a class="btn btn-danger" onclick="deleteTodo({{ $todo->id }})">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$todos->links()}}
                </div>
            </div>
        </div>
    </div>

</div>
<div class="modal fade" id="addTodoModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Todo</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="name" class="col-sm-2">Task</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="task" name="todo" placeholder="Enter task">
                        <span id="taskError" class="alert-message"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2">Tag</label>
                    <div class="col-sm-12">
                        <select name="tag">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach

                        </select>
                        <span id="taskError" class="alert-message"></span>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="addTodo()">Save</button>
            </div>
        </div>
    </div>

</div>
<div class="modal fade" id="editTodoModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Todo</h4>
            </div>
            <div class="modal-body">

                <input type="hidden" name="todo_id" id="todo_id">
                <div class="form-group">
                    <label for="name" class="col-sm-2">Task</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="edittask" name="todo" placeholder="Enter task">
                        <span id="taskError" class="alert-message"></span>
                    </div>
                </div>
                <div class="form-group">
                <label for="name" class="col-sm-2">Tag</label>
                <div class="col-sm-12">
                   <select name="tag">
                       @foreach($tags as $tag)
                           <option value="{{$tag->id}}">{{$tag->name}}</option>
                           @endforeach
                   </select>
                    <span id="taskError" class="alert-message"></span>
                <div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="updateTodo()">Save</button>
            </div>
        </div>
    </div>



<script src="{{asset('js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>

</body>
</html>
