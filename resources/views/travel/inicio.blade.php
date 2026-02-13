@extends('layouts.app')

@section('contenido')

<!-- imagen superior -->
<div class="hero">
    <div class="hero-overlay text-center">
        <h1 class="display-4"> Horizonte Viajero</h1>
        <p class="lead">
            Hacemos realidad tus viajes soñados.
            Descubre destinos increíbles y vive experiencias inolvidables junto al mar.
        </p>
    </div>
</div>

<x-destinos></x-destinos>
@endsection
