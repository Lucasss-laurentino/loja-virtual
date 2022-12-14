<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container-fluid p-0">

            <!--- Nav --->
            <nav class="navbar navbar-expand-sm m-0 p-0 bg-white">
                <div class="container justify-content-sm-start mx-4">
                    <a class="navbar-brand font d-flex align-items-center" href="{{ route('produtos.index') }}">
                        Coisas de mulher
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-handbag-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 0-2 2v2H5V3a3 3 0 1 1 6 0v2h-1V3a2 2 0 0 0-2-2zM5 5H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11v1.5a.5.5 0 0 1-1 0V5H6v1.5a.5.5 0 0 1-1 0V5z"/>
                        </svg>        
                    </a>
                    <button class="navbar-toggler" id="teste" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end mx-4" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto my-0">
                        <li class="nav-item active">
                            <a class="nav-link d-flex align-items-center items-menu justify-content-center" href="{{ route('produtos.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door mx-2" viewBox="0 0 16 16">
                                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                                </svg>
                            </a>
                        </li>
                        @if(session()->get('user') === null)
                        <li class="nav-item">
                            <a class="nav-link d-flex justify-content-center align-items-center items-menu" id="login" data-toggle="modal" data-target="#exampleModalCenter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person mx-2" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                            </a>
                        </li>
                        @endif
                        @if(session()->get('user') != null)
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center items-menu justify-content-center" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>                            
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  d-flex align-items-center items-menu justify-content-center" href="{{ route('logout') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                                    <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <div class="container-flui w-100 mt-2 mt-md-3 d-flex justify-content-center">
                                <button href="" id="adc-product" class="nav-link bg-white items-menu d-flex alin-self-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
                                    </svg>
                                </button>
                            </div>
                        </li>
                        @endif
                        @if(session()->get('user') === null)
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center items-menu justify-content-center" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>                            
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </nav>

            <!--- Menu cadastramento de produtos --->
            <div class="d-flex justify-content-end container-menu-fundo" style="width:100%;">
                <ul class="menu-items-list d-none" style="width:40%;">
                    <li class="menu-items d-flex align-items-center" value="1">
                        Categoria 
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
                            <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
                        </svg>
                    </li>
                    <li class="menu-items d-flex align-items-center" value="2">
                        Sub categoria
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
                            <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
                        </svg>

                    </li>
                    <li class="menu-items d-flex align-items-center" value="3">
                        Produto
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
                            <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
                        </svg>
                    </li>
                </ul>
            </div>

            <!--- Carrousel --->
            <div id="carouselExampleControls" class="carousel slide d-block" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="ratio" style="--bs-aspect-ratio: 40%;">
                            <img src="{{ asset('img/carrousel-roupas/Banner2.png') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="ratio" style="--bs-aspect-ratio: 40%;">
                            <img src="{{ asset('img/carrousel-roupas/Banner1.png') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            
            <!--- Formulario  e listagem de Categoria --->
            <div id="form-category" class="container d-none">
                <div class="d-flex justify-content-center mt-4">
                    <div class="container" style="width:60%;">
                        <div class="container d-flex justify-content-around">
                            <h4 class="cor">Cadastre uma categoria</h4>
                            <button class="footer rounded" id="close-category"><strong>voltar</strong></button>
                        </div>
                        <div class="container d-flex justify-content-center">
                            <ul id="categories-name" style="width:50%;">
                            </ul>
                        </div>
                        <form class="w-100" id="form-cat">
                            <div class="form-group py-2">
                                <input type="text" class="w-100 input-border input p-0" id="categoryName" name="categoryName" style="height: 40px;" aria-describedby="emailHelp" placeholder="Categoria">
                            </div>
                            <div class="form-group my-3 d-flex justify-content-center">
                                <button class="footer rounded" id="create-category" style="height: 35px; width:60%;"><strong>Cadastrar</strong></button>
                            </div>
                            <div class="form-group py-2">
                                <h5 class="text-danger" id="erro-create-category"></h5>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--- lista de sub categoria ao selecionar categoria --->
            <div id="list-category" class="container d-none">
                <div class="d-flex justify-content-center mt-4">
                    <div class="container" style="width:80%;">
                        <div class="container d-flex justify-content-around">
                            <p id="subCategoryOptions" class="cor m-0">Escolha uma categoria</p>
                            <button class="footer rounded" id="close-sub-category"><strong>voltar</strong></button>
                        </div>
                        <div class="container d-block">
                            <!-- Ul de categorias --->
                            <ul class="" id="list-categories-names">
                            </ul>
                            <!--- ul de sub categorias --->
                            <ul class="d-none" id="list-sub-categories">
                            </ul>
                            <div class="d-flex justify-content-center d-none" id="form-create-sub-category">
                                <form style="width:50%;" id="form-subCategory">
                                    <div class="form-group py-2">
                                        <input type="text" class="w-100 input-border input p-0" id="subCategoryName" name="subCategoryName" style="height: 40px;" aria-describedby="emailHelp" placeholder="Sub categoria">
                                    </div>
                                    <div class="form-group my-3 d-flex justify-content-center" id="div-btn-create-sub">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--- Formulario cadastro de produto --->
            <div id="form-product" class="container d-none">
                <div class="d-flex justify-content-center mt-4">
                    <div class="container" style="width:60%;">
                        <div class="container d-flex justify-content-around">
                            <h4 class="cor">Cadastre um produto</h4>
                            <button class="footer rounded" id="close-product"><strong>voltar</strong></button>
                        </div>
                        <form enctype="multipart/form-data" class="w-100" id="form-insert-product" action="{{ route('produtos.store') }}" method="post">
                            @csrf
                            <div class="form-group py-2">
                                <input type="text" class="w-100 input-border input p-0" id="exampleInputEmail1" style="height: 40px;" name="name" aria-describedby="emailHelp" placeholder="Nome">
                            </div>
                            <div class="form-group py-2">
                                <input type="text" class="w-100 input-border input p-0" id="exampleInputEmail1" style="height: 40px;" aria-describedby="emailHelp" name="fabricante" placeholder="Fabricante">
                            </div>
                            <div class="form-group py-2">
                                <input type="number" class="w-100 input-border input p-0" id="preco" name="price" style="height: 40px;" name="priceUnit" placeholder="Pre??o unidade">
                            </div>
                            <div class="form-group py-2">
                                    <select class="w-100 bg-white input form-control-sm input-border" name="category" id="select-category">
                                    </select>
                            </div>
                            <div class="form-group py-2">
                                <select class="w-100 bg-white input  form-control-sm input-border" name="subCategory" id="select-subCategory">
                                </select>
                            </div>
                            <div class="form-group py-2">
                                <label for="exampleInputEmail1" class="d-block input">Tamanho (opcional)</label>
                                <div class="form-check input form-check-inline">
                                    <input class="form-check-input check-tam checklist" name="checklist[]" type="checkbox" id="inlineCheckbox1" value="P">
                                    <label class="form-check-label" for="inlineCheckbox1">P</label>
                                </div>
                                <div class="form-check input form-check-inline">
                                    <input class="form-check-input check-tam checklist" name="checklist[]" type="checkbox" id="inlineCheckbox2" value="M">
                                    <label class="form-check-label" for="inlineCheckbox2">M</label>
                                </div>
                                <div class="form-check input form-check-inline">
                                    <input class="form-check-input check-tam checklist" name="checklist[]" type="checkbox" id="inlineCheckbox3" value="G">
                                    <label class="form-check-label" for="inlineCheckbox3">G</label>
                                </div>
                                <div class="form-check input form-check-inline">
                                    <input class="form-check-input check-tam checklist" name="checklist[]" type="checkbox" id="inlineCheckbox4" value="GG">
                                    <label class="form-check-label" for="inlineCheckbox4">GG</label>
                                </div>
                            </div>

                            <div class="form-group input-quantidade-tamanho py-2 d-none" id="quantidade-input">
                                <input type="number" class="d-none input input-border my-2" data-tamanho="P" name="quantidade[]" style="width:30%;" id="qtdP" placeholder="Quantidade P">
                                <input type="number" class="d-none input input-border my-4" data-tamanho="M" name="quantidade[]" style="width:30%;" id="qtdM" placeholder="Quantidade M">
                                <input type="number" class="d-none input input-border my-4" data-tamanho="G" name="quantidade[]" style="width:30%;" id="qtdG" placeholder="Quantidade G">
                                <input type="number" class="d-none input input-border my-4" data-tamanho="GG" name="quantidade[]" style="width:30%;" id="qtdGG" placeholder="Quantidade GG">
                            </div>
                            <div class="form-group">
                                <label for="formFileSm" class="form-label input">Carregue uma imagem do produto</label>
                                <input class="form-control" name="img-product" accept="image/gif, image/jpeg, image/png, image/webp" id="formFileSm" type="file">
                            </div>
                            <div class="form-group my-3 d-flex justify-content-center">
                                <button class="footer rounded" id="insert-product" style="height: 35px; width:60%;"><strong>Cadastrar</strong></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--- Lista de categoria --->
            <div class="container-fluid">
                <ul class="mt-5 border-category d-flex align-items-center list-x" style="height: 60px;">
                    @foreach($categories as $category)
                    <li class="d-inline mx-5 items-menu list-category productThisCategory " style="width: 15%;" value="{{ $category->id }}">{{ $category->name }}</li>
                    @endforeach
                </ul>
            </div>
        
        </div>

        @yield('content')

        <!--- Modal --->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title category-title" id="exampleModalLongTitle">Coisas de Mulher</h5>
                        <button type="button" class="close bg-white btn-modal-close" data-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>      
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <div class="container" style="width:60%;">
                            <form action="{{ route('social.login', ['provider' => 'google']) }}" method="GET">
                                <button class="button-redes w-100 d-flex justify-content-around p-1 my-3">
                                    <img src="{{ asset('img/google-svgrepo-com.svg') }}" alt="" width="25" height="25">
                                    <p class="m-0 paragrafo">Fa??a login com o Google</p>
                                </button>
                            </form>
                            <form action="{{ route('social.login', ['provider' => 'facebook']) }}">
                                <button class="button-redes w-100 d-flex justify-content-around p-1 align-items-center">
                                    <img src="{{ asset('img/facebook-svgrepo-com.svg') }}" class="ml-1" width="25" height="25">
                                    <p class="m-0 paragrafo">Fa??a login com o Facebook</p>
                                </button>
                            </form>
                        </div>
                        <p class="my-4 btn-modal-close">Ao fazer login voc?? concorda com nossa poli??tica e termos</p>
                    </div>
                </div>
            </div>
        </div>  

        <!--- Footer --->
        <footer class="text-center footer text-lg-start bottom-fixed">
            <section class="pt-3">
                <div class="container text-center text-md-start mt-5">
                    <div class="row mt-3">
                        <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4">
                            <h1 class="">Pol??tica & termos</h1>
                            <h4>
                                <a href="" class="text-decoration-underline">Pol??tica de privacidade</a>
                            </h4>
                            <h4>
                                <a href="" class="text-decoration-underline">Termos de uso</a>
                            </h4>
                        </div>
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <h1 class="">Contato</h1>
                            <h4>
                                contato@coisasdemulher.com
                            </h4>
                        </div>
                    </div>
                </div>
            </section>
            <div class="text-center footer p-4">
                <h5>?? 2022 Copyright: coisasdemulher.com</h5>
            </div>
        </footer>

    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/changeCategory.js') }}"></script>
    <script src="{{ asset('js/ready.js') }}"></script>
    <script src="{{ asset('js/ajaxCreate.js') }}"></script>
    <script src="{{ asset('js/card-responsive.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>
    <script src="{{ asset('js/active.js') }}"></script>
    <script src="{{ asset('js/adc-products.js') }}"></script>
    <script>
        $(document).ready(function(){
            var tam = $(window).width();
            if (tam <= 768){
                $(".card-img-top").removeClass('img-sm-product');
            }

        });
    </script>
</html>