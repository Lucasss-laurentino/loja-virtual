/*
$(document).ready(function(e) {

    e.preventDefault();

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/produtos/index',
        method: 'post',
        success: function(resposta) {
            console.log(resposta)
        }
    });

});
*/