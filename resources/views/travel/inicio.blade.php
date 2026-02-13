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

        <!-- Cancún -->
        <div class="col-md-3">
            <a href="{{ url('/destino/cancun') }}" class="text-decoration-none">
                <div class="card shadow h-100">
                    <img src="{{ asset('img/cancun.webp') }}"
                         class="card-img-top"
                         alt="Cancún">

                    <div class="card-body text-center">
                        <h5 class="card-title text-dark">Cancún</h5>
                        <p class="text-muted">
                            Playas de arena blanca y aguas turquesa ideales para descansar y disfrutar del Caribe.
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Riviera Maya -->
        <div class="col-md-3">
            <a href="{{ url('/destino/riviera-maya') }}" class="text-decoration-none">
                <div class="card shadow h-100">
                    <img src="{{ asset('img/Riviera.webp') }}"
                         class="card-img-top"
                         alt="Riviera Maya">

                    <div class="card-body text-center">
                        <h5 class="card-title text-dark">Riviera Maya</h5>
                        <p class="text-muted">
                            Naturaleza, cenotes y cultura maya en uno de los destinos más hermosos de México.
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Los Cabos -->
        <div class="col-md-3">
            <a href="{{ url('/destino/los-cabos') }}" class="text-decoration-none">
                <div class="card shadow h-100">
                    <img src="{{ asset('img/LosCabos.jpg') }}"
                         class="card-img-top"
                         alt="Los Cabos">

                    <div class="card-body text-center">
                        <h5 class="card-title text-dark">Los Cabos</h5>
                        <p class="text-muted">
                            Paisajes desérticos, lujo y espectaculares vistas frente al océano.
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Puerto Vallarta -->
        <div class="col-md-3">
            <a href="{{ url('/destino/puerto-vallarta') }}" class="text-decoration-none">
                <div class="card shadow h-100">
                    <img src="{{ asset('img/Puerto.jpg') }}"
                         class="card-img-top"
                         alt="Puerto Vallarta">

                    <div class="card-body text-center">
                        <h5 class="card-title text-dark">Puerto Vallarta</h5>
                        <p class="text-muted">
                            Tradición mexicana, hermosos atardeceres y un ambiente ideal para vacacionar.
                        </p>
                    </div>
                </div>
            </a>
        </div>

    </div>

</div>

@endsection
