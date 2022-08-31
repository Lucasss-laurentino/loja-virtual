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
                    $('#categories-name').append('<li class=" border-white text-center d-flex justify-content-between my-3" style="width:100%;">'+category.name+'<div class="d-flex justify-content-between"><button class="btn btn-sm btn-trash" value="'+category.id+'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></button></div></li>')
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

// Excluir uma categoria
$(document).on('click', '.btn-trash', function(e){
    
    e.preventDefault()

    const id = this.value

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/categories/delete/'+id,
        method: 'post',
        success: function(resposta) {

            $('#categories-name').empty();
            $.each(resposta, function(index, category){
                $('#categories-name').append('<li class=" border-white text-center d-flex justify-content-between my-3" style="width:100%;">'+category.name+'<div class="d-flex justify-content-between"><button class="btn btn-sm btn-trash" value="'+category.id+'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></button></div></li>')
            })

        }
    });
})

// Excluir sub categoria
$(document).on('click', '.btn-trash-sub', function(e) {
    
    e.preventDefault()

    const id = this.value

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/subCategories/delete/'+id,
        method: 'post',
        success: function(resposta) {

            $('#list-sub-categories').empty();
            $.each(resposta, function(index, subCategory){
                $('#list-sub-categories').append('<li class="m-auto" style="width:30%;"><div class="d-flex justify-content-between">'+subCategory.subCategoryName+'<button class="btn btn-sm btn-trash" value="'+subCategory.id+'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></button></div></li>')
            })

        }
    });



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
                $('#list-sub-categories').append('<li class="m-auto" style="width:30%;" id="" value=""><div class="d-flex justify-content-between">'+subCategory.subCategoryName+'<button class="btn btn-sm btn-trash-sub" value="'+subCategory.id+'"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></button></div></li>')
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