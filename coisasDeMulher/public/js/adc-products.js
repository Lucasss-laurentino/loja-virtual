// Abrir menu para adms cadastrar produtos e categorias
$(document).on('click', '#adc-product', function(e) {
    
    e.preventDefault()

    $('.menu-items-list').toggleClass('d-none')

    $('.menu-items-list').toggleClass('list-menu')

});

// Abrir opção escolhida do menu
$(document).on('click', '.menu-items', function(e) {

    e.preventDefault();

    $('.menu-items-list').toggleClass('d-none')
    $('.menu-items-list').toggleClass('list-menu')

    if(this.value === 1) {

        // Antes de abrir está opção, fechar a outra aberta
        $('#list-category').addClass('d-none');
        $('#form-product').addClass('d-none');



        $('#carouselExampleControls').addClass('d-none');
        $('#form-category').removeClass('d-none');
    
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/categories/selectCategories',
            method: 'post',
            success: function(resposta) {

                $('#categories-name').empty();
                $.each(resposta, function(index, category){
                    $('#categories-name').append('<li class=" border-white text-center">'+category.name+'</li>')
                })
    
            }
        });
    }

    if(this.value === 2) {

        // Fechar opçoes aberta
        $('#form-product').addClass('d-none');
        $('#form-category').addClass('d-none');

        $('#carouselExampleControls').addClass('d-none');

        if($('#list-sub-categories').hasClass('d-block')){
            
            $('#list-sub-categories').removeClass('d-block')
            
            $('#list-sub-categories').addClass('d-none')

            $('#form-create-sub-category').addClass('d-none')
        }
        $('#list-category').removeClass('d-none');

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/categories/selectCategories',
            method: 'post',
            success: function(resposta) {

                $('#list-categories-names').empty();
                $.each(resposta, function(index, category){
                    $('#list-categories-names').append('<li class="text-center category-identifier" id="category'+category.id+'" value="'+category.id+'">'+category.name+'</li>')
                })
    
            }
        });


    }

    if(this.value === 3) {

        // Fechar opçoes aberta
        $('#list-category').addClass('d-none');
        $('#form-category').addClass('d-none');

        $('#carouselExampleControls').addClass('d-none');
        
        $('#form-product').removeClass('d-none');

    }
})

// Fechar categoria
$(document).on('click', '#close-category', function(e) {
    
    e.preventDefault();

    $('.menu-items-list').toggleClass('d-none')
    $('.menu-items-list').toggleClass('list-menu')

    $('#form-category').addClass('d-none');

    $('#carouselExampleControls').removeClass('d-none');

});

// Cadastrar uma categoria
$(document).on('click', '#create-category', function(e) {
    
    e.preventDefault()

    const categoryName = $('#categoryName').val()
    
    if(categoryName.length < 2){

        $('#erro-create-category').html('Nome para categoria muito curto')

    } else if ($.isNumeric(categoryName)) {

        $('#erro-create-category').html('Nome para categoria não pode conter números')

    } else {

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/categories/store',
            method: 'post',
            data: $('#form-cat').serialize(),
            dataType: 'json',
            success: function(resposta) {

                $('#categories-name').empty();
                $.each(resposta, function(index, category){
                    $('#categories-name').append('<li class=" border-white text-center">'+category.name+'</li>')
                })

                $('#categoryName').val('')
    
            }
        });
    
    }

})

// Quando clicar em categoria, mostar suas sub categorias e formulario para cadastro
$(document).on('click', '.category-identifier', function(e) {
    
    e.preventDefault();

    const id = this.value

    $('.category-identifier').addClass('d-none')
    $('#category'+id).removeClass('d-none')

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/subCategories/selectSubCategory/'+id,
        method: 'post',
        success: function(resposta) {
            $('#list-sub-categories').removeClass('d-none');
            $('#list-sub-categories').addClass('d-block');
            $('#list-sub-categories').empty();
            $.each(resposta, function(index, subCategory){
                $('#list-sub-categories').append('<li class="text-center" id="" value="">'+subCategory.subCategoryName+'</li>')
            })

        }
    });

    $('#form-create-sub-category').removeClass('d-none')

    // Criar e listar sub categorias com a categoria recem criada
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
            
                $('#list-sub-categories').empty();
            
                    $.each(resposta, function(index, subCategory){
                        $('#list-sub-categories').append('<li class="text-center" id="" value="">'+subCategory.subCategoryName+'</li>')
                
                })

                $('#subCategoryName').val('')
            
            }
        });
    });    

})

// Fechar sub categorias
$(document).on('click', '#close-sub-category', function(e) {

    if($('#list-sub-categories').hasClass('d-block')) {
        
        $('#list-sub-categories').removeClass('d-block')
        
        $('#list-sub-categories').addClass('d-none')
    
    }

    $('#list-category').addClass('d-none')
    $('#form-create-sub-category').addClass('d-none')


    $('.menu-items-list').removeClass('d-none')
    $('.menu-items-list').addClass('list-menu')

    $('#carouselExampleControls').removeClass('d-none');
    
});

// fechar produto
$(document).on('click', '#close-product', function(e) {
    
    e.preventDefault();

    $('#form-product').addClass('d-none')

    $('.menu-items-list').removeClass('d-none')
    $('.menu-items-list').addClass('list-menu')

    $('#carouselExampleControls').removeClass('d-none');
});


// Select category
$(document).ready(function(e) {
    
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/categories/selectCategories',
        method: 'post',
        success: function(resposta) {
            
            $('#select-category').append('<option value="">Selecione uma categoria</option>');
            $.each(resposta, function(index, category){
                $('#select-category').append('<option value="'+category.id+'">'+category.name+'</option>')
            })
    
        }
    });

})
// Select de categorias e sub categorias para cadastrar produto
$('#select-category').change(function(e) {

    e.preventDefault();

    const id = e.target.value;

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/subCategories/selectSubCategory/'+id,
        method: 'post',
        success: function(resposta) {

            $('#select-subCategory').append('<option value="">Selecione uma sub categoria</option>');
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