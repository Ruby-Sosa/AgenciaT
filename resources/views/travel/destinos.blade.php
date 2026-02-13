@extends('layouts.app')

@section('contenido')

<div class="container mt-5">

    <h2 class="text-center section-title mb-4">
        Nuestros Destinos
    </h2>

    <ul class="list-group shadow">

        <a href="/destino/cancun"
           class="list-group-item list-group-item-action">
            Cancún
        </a>

        <a href="/destino/riviera-maya"
           class="list-group-item list-group-item-action">
            Riviera Maya
        </a>

        <a href="/destino/los-cabos"
           class="list-group-item list-group-item-action">
            Los Cabos
        </a>

        <a href="/destino/puerto-vallarta"
           class="list-group-item list-group-item-action">
            Puerto Vallarta
        </a>

    </ul>

</div>

@endsection

