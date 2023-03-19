@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($ofertas as $oferta)
            <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$oferta->puesto}}</h5>
                        <p class="card-text">{{$oferta->descripcion}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
              @endforeach
        </div>
    </section>
@endsection
