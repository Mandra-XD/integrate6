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
                    <div class="card-body">
                        <h5 class="card-title">{{$oferta->puesto}}</h5>
                        <p class="card-text">{{$oferta->empresa}}</p>
                        <p class="card-text">{{$oferta->lugar}}</p>
                     <img src="/imagenes/{{$oferta->user->logo }}" class="img-fluid" alt="..." width="100px">
                         <p class="card-text">{{$oferta->turno}}</p>
                        <a href="{{ route('cuestionario.create') }}" class="btn btn-primary">Postulate</a>
                    </div>
                </div>
            </div>
              @endforeach
        </div>
    </section>
@endsection
