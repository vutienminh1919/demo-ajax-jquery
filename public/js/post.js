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

            if (response) {
                $("#post_id").val(response.id);
                $("#title").val(response.title);
                $("#description").val(response.description);
                $("#category").val(response.category);
                $('#post-modal').modal('show');
            }
        }
    });
}

function createPost() {
    let title = $('#title').val();
    let description = $('#description').val();
    let category = $('#category').val();
    let user = $('#user_id').val();
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
            category: category,
            _token: _token
        },
        success: function (response) {
            toastr.success('Create Success');
            if (response.code == 200) {
                if (id != "") {
                    $("#row_" + id + " td:nth-child(2)").html(response.data.title);
                    $("#row_" + id + " td:nth-child(3)").html(response.data.description);
                    $("#row_" + id + " td:nth-child(4)").html(response.data.category);
                } else {
                    $('table tbody').prepend('<tr id="row_' + response.data.id + '"><td>' + response.data.id + '</td>' +
                        '<td>' + response.data.title + '</td>' +
                        '<td>' + response.data.description + '</td>' +
                        '<td>' + response.data.category + '</td>' +
                        '<td>' + response.data.user_id + '</td>' +
                        '<td><a href="javascript:void(0)" data-id="' + response.data.id + '" onclick="detailPost(event.target)" class="btn btn-info">Detail</a></td>' +
                        '<td><a href="javascript:void(0)" data-id="' + response.data.id + '" onclick="editPost(event.target)" class="btn btn-success">Edit</a></td>' +
                        '<td><a href="javascript:void(0)" data-id="' + response.data.id + '" class="btn btn-danger" onclick="deletePost(event.target)">Delete</a></td>' +
                        '</tr>');
                }
                $('#title').val('');
                $('#description').val('');
                $('#category').val('');

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
                $("#category").val(response.category);
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
                    toastr.success('deleta success');
                    $("#row_" + id).remove();

                }

            }
        )
        ;
    }
}
$(document).on('keyup','#search',function () {
    let search = $(this).val();
    let url = `/api/search`
    $.ajax({
        type:"GET",
        url: url,
        data:{
            search:search
        },
        dataType:"json",
        success:function (response){
            $('.list-post').html(response);
        }
    })
})
//
//
// let url = origin + '/api/posts'
// $.ajax(
//     {
//         url: url,
//         type: "GET",
//         dataType: 'json'
//
//     }
// ).done(function (response) {
//     // console.log(response);
//
//     displayPost(response)
// });
//
// $("#search-input").on("input",search);
// function search(){
//     let searchValue = $(this).val();
//     let result = [];
//     for (let i = 0;i<data.length;i++){
//         if (data[i].name.toLowerCase().includes(searchValue.toLowerCase())){
//             result.push(data[i]);
//         }
//     }
//     displayPost(result);
//
// }
//
//
// function displayPost(posts){
//     let html = "";
//     for (let i = 0; i < posts.length; i++) {
//         html += `<tr>
//                         <td>${posts[i].id}</td>
//                         <td>${posts[i].title}</td>
//                         <td>${posts[i].description}</td>
//                         <td>${posts[i].category}</td>
//                         // <td>${posts[i].id}</td>
//                         <td><a href="javascript:void(0)" data-id="{{ $post->id }}" onclick="detailPost(event.target)"
//                                class="btn btn-info">Detail</a></td>
//                         <td><a href="javascript:void(0)" data-id="{{ $post->id }}" onclick="editPost(event.target)"
//                                class="btn btn-success">Edit</a></td>
//                         <td>
//                             <a href="javascript:void(0)" data-id="{{ $post->id }}" class="btn btn-danger"
//                                onclick="deletePost(event.target)">Delete</a></td>
//                     </tr>`
//
//     }
//     $(".list-post").html(html);
// }























