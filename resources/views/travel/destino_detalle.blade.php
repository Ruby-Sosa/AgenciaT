@extends('layouts.app')

@section('contenido')

<div class="container mt-5">

    <div class="destino-container">

        <h1 class="destino-titulo">
            {{ $destino['titulo'] }}
        </h1>

        <img src="{{ asset($destino['imagen']) }}"
             class="destino-img"
             alt="{{ $destino['titulo'] }}">

        <p class="destino-descripcion mt-3">
            {{ $destino['descripcion'] }}
        </p>

<div class="mt-4 d-flex justify-content-center gap-3">
    <a href="/destinos" class="btn btn-secondary">
    Volver a destinos
    </a>
    <a href="/inicio" class="btn btn-secondary">
    Volver al inicio
    </a>
</div>

    </div>

</div>

@endsection
