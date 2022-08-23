$(document).on('click', '#adc-product', function(e) {
    
    e.preventDefault();


    $('#carouselExampleControls').toggleClass('d-block');
    $('#carouselExampleControls').toggleClass('d-none');

    $('#form-product').toggleClass('d-none');
    $('#form-product').toggleClass('d-block');
});

$(document).on('click', '#teste', function(e) {
    e.preventDefault();

    $('#navbarSupportedContent').toggleClass('show');
});