@extends('layout.layout')


@section('content')

<main>
    <div class="container-fluid my-5">
        <div class="row">
            @foreach($products as $product)
            <div class="col-6 col-xl-4 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center align-items-stretch">
                <div class="card text-center mb-3" style="width: 100%;"> 
                    <div class="ratio ratio-1x1" style=""> 
                        <img class="card-img-top" src="{{ asset('storage/'.$product->img) }}" alt="Card image cap">
                    </div>    
                    <div class="card-body">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <h5 class="card-text">R$ {{ $product->price }}</h5>
                    </div>
                    <div class="card-footer footer">
                        <a href="#" class="btn btn-lg footer">Adicionar ao carrinho</a>
                            @if(session()->get('usuario') && session()->get('usuario')['adm'] == 1)
                            <a href="#" class="btn adc_carrinho mt-1 w-100">Editar</a>
                            @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>


@endsection