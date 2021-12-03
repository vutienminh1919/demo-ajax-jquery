$(document).ready(function($){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#addNewBook').click(function () {
        $('#addEditBookForm').trigger("reset");
        $('#ajaxBookModel').html("Add Book");
        $('#ajax-book-model').modal('show');
    });

    $('body').on('click', '.edit', function () {
        let id = $(this).data('id');

        // ajax
        $.ajax({
            type:"POST",
            url: "{{ url('edit') }}",
            data: { id: id },
            dataType: 'json',
            success: function(res){
                $('#ajaxBookModel').html("Edit Book");
                $('#ajax-book-model').modal('show');
                $('#id').val(res.id);
                $('#name').val(res.name);
                $('#author').val(res.author);
            }
        });
    });
    $('body').on('click', '.delete', function () {
        if (confirm("Delete Record?") == true) {
            let id = $(this).data('id');

            // ajax
            $.ajax({
                type:"POST",
                url: "{{ url('destroy') }}",
                data: { id: id },
                dataType: 'json',
                success: function(res){
                    window.location.reload();
                }
            });
        }
    });
    $('body').on('click', '#btn-save', function (event) {
        let id = $("#id").val();
        let name = $("#name").val();

        let author = $("#author").val();
        // $("#btn-save").html('Please Wait...');
        // $("#btn-save"). attr("disabled", true);

        // ajax
        $.ajax({
            type:"POST",
            url: "{{ url('store') }}",
            data: {
                id:id,
                title:name,
                author:author,
            },
            dataType: 'json',
            success: function(res){
                window.location.reload();
                // $("#btn-save").html('Submit');
                // $("#btn-save"). attr("disabled", false);
            }
        });
    });
});
