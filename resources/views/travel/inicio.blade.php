@extends('layouts.app')

@section('contenido')

<!-- imagen grande superior -->
<div class="hero">
    <div class="hero-overlay text-center">
        <h1 class="display-4"> Horizonte Viajero</h1>
        <p class="lead">
            Hacemos realidad tus viajes soñados.
            Descubre destinos increíbles y vive experiencias inolvidables junto al mar.
        </p>
    </div>
</div>

<!-- CONTENIDO //pasar a componentes y los h se pasaran a href (Titulo, descripcion, imagen)--> 
<div class="container mt-5">

    <h2 class="section-title mb-4 text-center">
        Destinos populares
    </h2>

    <div class="row">

        <div class="col-md-3">
            <div class="card card-custom text-center p-3 shadow">
                <h5 class="card-title">Cancún</h5>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-custom text-center p-3 shadow">
                <h5 class="card-title">Riviera Maya</h5>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-custom text-center p-3 shadow">
                <h5 class="card-title">Los Cabos</h5>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-custom text-center p-3 shadow">
                <h5 class="card-title">Puerto Vallarta</h5>
            </div>
        </div>

    </div>

</div>

@endsection
