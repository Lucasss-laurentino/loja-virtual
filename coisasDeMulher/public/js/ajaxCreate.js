$(document).on('click', '#insert-category', function(e) {
    
    e.preventDefault();

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/categories/store',
        method: 'post',
        data: $('#form-cat').serialize(),
        dataType: 'json',
        success: function(resposta) {
            if(resposta === true) {

                $('#form-categoria').toggleClass('d-none');
                $('#form-categoria').toggleClass('d-block');

                $('#form-options').toggleClass('d-none');
            }
        }
    });

});