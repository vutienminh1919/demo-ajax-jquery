$('#laravel_crud').DataTable();

function addPost() {
    $("#post_id").val('');
    $('#post-modal').modal('show');
}

function editPost(event) {
    let id = $(event).data("id");
    let _url = `/posts/${id}`;
    $('#titleError').text('');
    $('#descriptionError').text('');

    $.ajax({
        url: _url,
        type: "GET",
        success: function (response) {
            toastr.success('Edit Success');
            if (response) {
                $("#post_id").val(response.id);
                $("#title").val(response.title);
                $("#description").val(response.description);
                $('#post-modal').modal('show');
            }
        }
    });
}

function createPost() {
    let title = $('#title').val();
    let description = $('#description').val();
    let id = $('#post_id').val();

    let _url = `/posts`;
    let _token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url: _url,
        type: "POST",
        data: {
            id: id,
            title: title,
            description: description,
            _token: _token
        },
        success: function (response) {
            toastr.success('Create Success');
            if (response.code == 200) {
                if (id != "") {
                    $("#row_" + id + " td:nth-child(2)").html(response.data.title);
                    $("#row_" + id + " td:nth-child(3)").html(response.data.description);
                } else {
                    $('table tbody').prepend('<tr id="row_' + response.data.id + '"><td>' + response.data.id + '</td><td>' + response.data.title + '</td><td>' + response.data.description + '</td><td><a href="javascript:void(0)" data-id="' + response.data.id + '" onclick="detailPost(event.target)" class="btn btn-info">Detail</a></td><td><a href="javascript:void(0)" data-id="' + response.data.id + '" onclick="editPost(event.target)" class="btn btn-success">Edit</a></td><td><a href="javascript:void(0)" data-id="' + response.data.id + '" class="btn btn-danger" onclick="deletePost(event.target)">Delete</a></td></tr>');
                }
                $('#title').val('');
                $('#description').val('');

                $('#post-modal').modal('hide');
            }
        },
        error: function (response) {
            $('#titleError').text(response.responseJSON.errors.title);
            $('#descriptionError').text(response.responseJSON.errors.description);
        }
    });
}

function detailPost(event) {
    let id = $(event).data("id");
    let _url = `/posts/${id}`;
    let _token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: _url,
        type: 'GET',
        success: function (response) {
            if (response) {
                $("#post_id").val(response.id);
                $("#title").val(response.title);
                $("#description").val(response.description);
                $('#post-modal').modal('show');
            }
        }

    })
}

function deletePost(event) {
    let id = $(event).data("id");
    let _url = `/posts/${id}`;
    let _token = $('meta[name="csrf-token"]').attr('content');
    if (confirm('Are you sure you want to delete this?')) {
        $.ajax({
                url: _url,
                type: 'DELETE',
                data: {
                    _token: _token
                },
                success: function (response) {

                    $("#row_" + id).remove();
                    toastr.success('Delete Success');
                }

            }
        )
        ;
    }
}




