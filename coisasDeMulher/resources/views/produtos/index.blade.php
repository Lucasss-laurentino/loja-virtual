@extends('layout.layout')


@section('content')

<main>
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center align-items-stretch">
                <div class="card text-center mb-3" style="width: 25rem;">
                    <div class="ratio ratio-1x1">
                        <img class="card-img-top" src="{{ asset('img/CONJUNTO-LAISE-LIMA-E-BRANCO-.png') }}" alt="Card image cap">
                    </div>    
                    <div class="card-body">
                        <h5 class="card-title">Sandália Colcci</h5>
                        <p class="card-text">R$ 119,90</p>
                    </div>
                    <div class="card-footer footer">
                        <a href="#" class="btn footer">Adicionar ao carrinho</a>
                            @if(session()->get('usuario') && session()->get('usuario')['adm'] == 1)
                            <a href="#" class="btn adc_carrinho mt-1 w-100">Editar</a>
                            @endif
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center align-items-stretch">
                <div class="card text-center mb-3" style="width: 25rem;">
                    <div class="ratio ratio-1x1">
                        <img class="card-img-top" src="{{ asset('img/Vestido-no-frontal.webp') }}" alt="Card image cap">
                    </div>    
                    <div class="card-body">
                        <h5 class="card-title">Sandália Colcci</h5>
                        <p class="card-text">R$ 119,90</p>
                    </div>
                    <div class="card-footer footer">
                        <a href="#" class="btn footer">Adicionar ao carrinho</a>
                            @if(session()->get('usuario') && session()->get('usuario')['adm'] == 1)
                            <a href="#" class="btn adc_carrinho mt-1 w-100">Editar</a>
                            @endif
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center align-items-stretch">
                <div class="card text-center mb-3" style="width: 25rem;">
                    <div class="ratio ratio-1x1">
                        <img class="card-img-top" src="{{ asset('img/conjunto-cropped-fany.jpeg') }}" alt="Card image cap">
                    </div>    
                    <div class="card-body">
                        <h5 class="card-title">Sandália Colcci</h5>
                        <p class="card-text">R$ 119,90</p>
                    </div>
                    <div class="card-footer footer">
                        <a href="#" class="btn footer">Adicionar ao carrinho</a>
                            @if(session()->get('usuario') && session()->get('usuario')['adm'] == 1)
                            <a href="#" class="btn adc_carrinho mt-1 w-100">Editar</a>
                            @endif
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center align-items-stretch">
                <div class="card text-center mb-3" style="width: 25rem;">
                    <div class="ratio ratio-1x1">
                        <img class="card-img-top" src="{{ asset('img/robe-noiva-tule.jpeg') }}" alt="Card image cap">
                    </div>    
                    <div class="card-body">
                        <h5 class="card-title">Sandália Colcci</h5>
                        <p class="card-text">R$ 119,90</p>
                    </div>
                    <div class="card-footer footer">
                        <a href="#" class="btn footer">Adicionar ao carrinho</a>
                            @if(session()->get('usuario') && session()->get('usuario')['adm'] == 1)
                            <a href="#" class="btn adc_carrinho mt-1 w-100">Editar</a>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection