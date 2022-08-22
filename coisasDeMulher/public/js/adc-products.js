$(document).on('click', '#adc-product', function(e) {
    
    e.preventDefault();


    $('#carouselExampleControls').toggleClass('d-block');
    $('#carouselExampleControls').toggleClass('d-none');

    $('#form-product').toggleClass('d-none');
    $('#form-product').toggleClass('d-block');
});