$(document).on('click', '#adc-product', function(e) {
    
    e.preventDefault();


    $('#carouselExampleControls').toggleClass('d-block');
    $('#carouselExampleControls').toggleClass('d-none');

    $('#form-options').toggleClass('d-none');
    $('#form-options').toggleClass('d-block');

});

$(document).on('click', '#cadastrar-categoria', function(e) {
    
    e.preventDefault();


    $('#form-options').toggleClass('d-block');
    $('#form-options').toggleClass('d-none');

    $('#form-categoria').toggleClass('d-none');
    $('#form-categoria').toggleClass('d-block');
});

$(document).on('click', '#cadastrar-produto', function(e) {
    
    e.preventDefault();


    $('#form-options').toggleClass('d-block');
    $('#form-options').toggleClass('d-none');

    $('#form-product').toggleClass('d-none');
    $('#form-product').toggleClass('d-block');
});

$(document).on('click', '#fechar-categoria', function(e) {
    
    e.preventDefault();


    $('#form-categoria').toggleClass('d-block');
    $('#form-categoria').toggleClass('d-none');

    $('#form-options').toggleClass('d-none');
    $('#form-options').toggleClass('d-block');
});

$(document).on('click', '#fechar-produto', function(e) {
    
    e.preventDefault();


    $('#form-product').toggleClass('d-block');
    $('#form-product').toggleClass('d-none');

    $('#form-options').toggleClass('d-none');
    $('#form-options').toggleClass('d-block');
});


$(document).on('click', '#teste', function(e) {
    e.preventDefault();

    $('#navbarSupportedContent').toggleClass('show');
});