    $(document).on('click', '.list-category', function(e) {

    e.preventDefault();
    
    $(this).addClass('active').siblings().removeClass('active');
    

    /* enviar ajax para a rota index selecionar os produtos da categoria e retornalos */
});