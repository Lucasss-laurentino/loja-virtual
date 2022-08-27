// Adicionando e removendo classes d-none e d-block
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

// Adicionar sub categoria
$(document).on('click', '#cadastrar-sub-categoria', function(e) {
    
    e.preventDefault();

    $('#form-options').toggleClass('d-block');
    $('#form-options').toggleClass('d-none');

    $('#list-category').toggleClass('d-none');
    $('#list-category').toggleClass('d-block');
});

// mostrar lista de sub categorias e formulário para cadastrar uma
$(document).on('click', '.button-category', function(e) {

    e.preventDefault();

    const valBtn = $(this).val()

    $('.list-categories').toggleClass(' d-none');

    $('#category'+valBtn).toggleClass('d-none');

    $('#list-sub-categories'+valBtn).toggleClass('d-none');
    
    $('#subCategoryOptions').html('Cadastre uma sub categoria')

    $('#cima'+valBtn).toggleClass('d-none')
    $('#baixo'+valBtn).toggleClass('d-none')
});

$(document).on('click', '#fechar-sub-categoria', function(e) {

    $('#list-category').toggleClass('d-none')
    $('#form-options').toggleClass(' d-none');

    
});

// Collapse
$(document).on('click', '#teste', function(e) {
    e.preventDefault();

    $('#navbarSupportedContent').toggleClass('show');
});