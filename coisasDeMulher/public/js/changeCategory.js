$(document).on('click', '.productThisCategory', function(e) {
    
    e.preventDefault();

    var id_category = $(this).val();

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/showProducts',
        method: 'post',
        data: {'id_category': id_category},
        dataType: 'json',
        success: function(resposta) {
            console.log(resposta)
        }
    });

});