@extends('layout.layout')


@section('content')

<div class="container-fluid p-0">
<nav class="navbar navbar-expand-lg bg-white">
    <div class="d-block w-100">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex justify-content-around">
            <a class="navbar-brand font d-flex align-items-center mx-4" href="#">
                Coisas de Mulher
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-handbag-fill" viewBox="0 0 16 16">
                    <path d="M8 1a2 2 0 0 0-2 2v2H5V3a3 3 0 1 1 6 0v2h-1V3a2 2 0 0 0-2-2zM5 5H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11v1.5a.5.5 0 0 1-1 0V5H6v1.5a.5.5 0 0 1-1 0V5z"/>
                </svg>        
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mx-4">
                    <li class="nav-item active">
                        <a class="nav-link d-flex align-items-center items-menu" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-door mx-2" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                        </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center items-menu" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person mx-2" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled d-flex align-items-center items-menu" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>                            
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container d-flex justify-content-center my-5">
                <h2 class="items-menu category-title">Pesquise por categorias</h2>
            </div>
            <ul class="mt-5 border-category d-flex align-items-center list-x" style="height: 60px;">
                <li class="d-inline mx-5 items-menu" style="width: 15%;">Roupas</li>
                <li class="d-inline mx-5 items-menu" style="width: 15%;">Langirier</li>
                <li class="d-inline mx-5 items-menu" style="width: 15%;">Calçados</li>
                <li class="d-inline mx-5 items-menu" style="width: 15%;">Bolsas</li>
                <li class="d-inline mx-5 items-menu" style="width: 15%;">Perfumes</li>
                <li class="d-inline mx-5 items-menu" style="width: 15%;">Maquiagens</li>
            </ul>
        </div>
    </div>

    </div>
</nav>

</div>

<header>
</header>

<main>
    <div class="container-fluid my-5">
        <ul class="d-block d-md-flex justify-content-center p-5 p-sm-3 align-items-center">
            <div class="row">
                <li class="col-xl-3 col-lg-4 col-md-5 col-sm-12 d-block d-sm-flex list-product m-3">
                    <div class="card">
                        <div class="ratio ratio-1x1">
                            <img class="card-img-top img-sm-product" src="{{ asset('img/CONJUNTO-LAISE-LIMA-E-BRANCO-.png') }}" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </li>
                <li class="col-xl-3 col-lg-4 col-md-5 col-sm-12 d-block d-sm-flex list-product m-3">
                    <div class="card">
                        <div class="ratio ratio-1x1">
                            <img class="card-img-top img-sm-product" src="{{ asset('img/Vestido-no-frontal.webp') }}" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </li>            
                <li class="col-xl-3 col-lg-4 col-md-5 col-sm-12 d-block d-sm-flex list-product m-3">
                    <div class="card">
                        <div class="ratio ratio-1x1">
                            <img class="card-img-top img-sm-product" src="{{ asset('img/conjunto-cropped-fany.jpeg') }}" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </li>            
            </div>
        </ul>        
    </div>
</main>


@endsection