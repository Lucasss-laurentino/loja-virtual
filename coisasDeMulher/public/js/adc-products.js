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

// listando sub categoria
$(document).on('click', '#cadastrar-sub-categoria', function(e) {
    
    e.preventDefault();
    
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/categories/selectCategories',
        method: 'post',
        success: function(resposta) {
            
            $('#list-categories').empty();
            $.each(resposta, function(index, category){
                $('#list-categories').append('<li class="list-group-item cor border-white text-center"><div class="container d-flex justify-content-center" style="width:50%;"><button class="mx-2 bg-white font cor hover-list button-category btn-name-category" value="'+category.id+'" id="btn-'+category.id+'">'+category.name+'</button></div></li>')
            })

        }
    });

    $('#form-options').toggleClass('d-block');
    $('#form-options').toggleClass('d-none');

    $('#list-category').toggleClass('d-none');
    $('#list-category').toggleClass('d-block');
});

// formulario para cadastrar sub categoria
$(document).on('click', '.btn-name-category', function(e) {
    e.preventDefault()

    const id = this.value;
    
    $('#list-categories').toggleClass('d-none');
    $('#list-sub-categories').toggleClass('d-none');

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/subCategories/selectSubCategory/'+id,
        method: 'post',
        success: function(resposta) {

            $('#list-sub-categories').empty();
            $.each(resposta, function(index, subCategory){
                $('#list-sub-categories').append('<li class="list-group-item cor border-white text-center"><div class="container d-flex justify-content-center" style="width:50%;"><p class="mx-2 bg-white font cor hover-list button-category btn-name-category">'+subCategory.subCategoryName+'</p></div></li>')
            })
            
        }
    });

    $('#form-create-sub-category').toggleClass('d-none');

    $(document).on('click', '#btn-create-subCategory', function(e) {
    
        e.preventDefault();
    
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/subCategories/'+id,
            method: 'post',
            data: $('#form-subCategory').serialize(),
            dataType: 'json',
            success: function(resposta) {
                if(resposta === true) {
                    console.log('criado');
                }
            }
        });
    
    
    
    });
    
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

// Select de categorias e sub categorias para cadastrar produto
$('#select-category').on('change', function(e) {

    e.preventDefault();

    const id = e.target.value;

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/subCategories/selectSubCategory/'+id,
        method: 'post',
        success: function(resposta) {

            $('#select-subCategory').empty();
            $.each(resposta, function(index, subCategory){
                
                $('#select-subCategory').append('<option value="'+subCategory.id+'">'+subCategory.subCategoryName+'</option>')

            })

        }
    });

});

// Collapse
$(document).on('click', '#teste', function(e) {
    e.preventDefault();

    $('#navbarSupportedContent').toggleClass('show');
});