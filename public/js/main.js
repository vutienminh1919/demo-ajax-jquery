function addTodo() {
    let task = $('#task').val();
    let baseUrl = origin;
    let _url = baseUrl +`/todos/create`;
    let _token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url: _url,
        type: "POST",
        data: {
            todo: task,
            _token: _token
        },
        success: function (data) {
            todo = data
            $('table tbody').append(`
                        <tr id="todo_${todo.id}">
                            <td>${todo.id}</td>
                            <td>${todo.todo}</td>
                            <td>${todo.tag.name}</td>
                            <td>
                                <a data-id="${todo.id}" onclick="editTodo(${todo.id})" class="btn btn-info">Edit</a>
                                <a data-id="${todo.id}" class="btn btn-danger" onclick="deleteTodo(${todo.id})">Delete</a>
                            </td>
                        </tr>
                    `);

            $('#task').val('');

            $('#addTodoModal').modal('hide');
        },
        error: function (response) {
            $('#taskError').text(response.responseJSON.errors.todo);
        }
    });
}

function deleteTodo(id) {
    let url = `/todos/${id}`;
    let token = $('meta[name="csrf-token"]').attr('content');

    if (confirm('Are you sure you want to delete this?')) {
        $.ajax({
            url: url,
            type: 'DELETE',
            data: {
                _token: token
            },
            success: function (response) {
                $("#todo_" + id).remove();
            }
        });
    }
}

function editTodo(e) {
    let id = $(e).data("id");
    let todo = $("#todo_" + id + " td:nth-child(2)").html();
    $("#todo_id").val(id);
    $("#edittask").val(todo);
    $('#editTodoModal').modal('show');
}

function updateTodo() {
    let task = $('#edittask').val();
    let id = $('#todo_id').val();
    let _url = `/todos/${id}`;
    let _token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url: _url,
        type: "PUT",
        data: {
            todo: task,
            _token: _token
        },
        success: function (data) {
            todo = data
            $("#todo_" + id + " td:nth-child(2)").html(todo.todo);
            $('#todo_id').val('');
            $('#edittask').val('');
            $('#editTodoModal').modal('hide');
        },
        error: function (response) {
            $('#taskError').text(response.responseJSON.errors.todo);
        }
    });
}
