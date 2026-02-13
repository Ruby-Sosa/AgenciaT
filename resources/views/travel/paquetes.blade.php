@extends('layouts.app')

@section('contenido')


<div class="text-center mb-5">
    <h1 class="section-title">Paquetes Turísticos</h1>
    <p class="lead">
        Elige el paquete ideal para tus vacaciones y vive una experiencia inolvidable.
    </p>
</div>

<div class="container">

    <div class="row g-4">

        <!-- Paquete enamorados -->
        <div class="col-md-4">
            <div class="card shadow h-100 border-0">

                <img src="{{ asset('img/cancun.webp') }}"
                     class="card-img-top"
                     style="height:200px; object-fit:cover;"
                     alt="Paquete Romance">

                <div class="card-body">
                    <h4 class="text-primary"> Paquete Enamorados</h4>

                    <p>
                        Disfruta una escapada romántica frente al mar,
                        ideal para parejas que buscan relajarse y crear
                        momentos inolvidables.
                    </p>

                    <ul>
                        <li>3 días y 2 noches frente al mar</li>
                        <li>Desayuno incluido</li>
                        <li>Cena romántica para dos</li>
                        <li>Decoración especial</li>
                        <li>Acceso a playa privada</li>
                    </ul>

                    <p><strong>Ideal para:</strong> Luna de miel o aniversarios.</p>
                </div>

                <div class="card-footer bg-white text-center">
                    <a href="#" class="btn btn-info text-white">
                        Solicita información con nuestro agentes 
                    </a>
                </div>

            </div>
        </div>

        <!-- Paquete familiar -->
        <div class="col-md-4">
            <div class="card shadow h-100 border-0">

                <img src="{{ asset('img/Riviera.webp') }}"
                     class="card-img-top"
                     style="height:200px; object-fit:cover;"
                     alt="Paquete Familiar">

                <div class="card-body">
                    <h4 class="text-primary"> Paquete Familiar</h4>

                    <p>
                        Vacaciones pensadas para toda la familia,
                        combinando diversión, descanso y actividades
                        para todas las edades.
                    </p>

                    <ul>
                        <li>5 días y 4 noches todo incluido</li>
                        <li>Alimentos y bebidas ilimitadas</li>
                        <li>Club infantil</li>
                        <li>Shows nocturnos</li>
                        <li>Actividades recreativas</li>
                    </ul>

                    <p><strong>Ideal para:</strong> viajes familiares.</p>
                </div>

                <div class="card-footer bg-white text-center">
                    <a href="#" class="btn btn-info text-white">
                        Solicita información con nuestro agentes 
                    </a>
                </div>

            </div>
        </div>

        <!-- Paquete aventura -->
        <div class="col-md-4">
            <div class="card shadow h-100 border-0">

                <img src="{{ asset('img/LosCabos.jpg') }}"
                     class="card-img-top"
                     style="height:200px; object-fit:cover;"
                     alt="Paquete Aventura">

                <div class="card-body">
                    <h4 class="text-primary"> Paquete Aventura</h4>

                    <p>
                        Perfecto para los amantes de la adrenalina
                        y la naturaleza, con experiencias únicas
                        y actividades al aire libre.
                    </p>

                    <ul>
                        <li>Excursiones guiadas</li>
                        <li>Snorkel y actividades acuáticas</li>
                        <li>Tour a cenotes</li>
                        <li>Deportes extremos</li>
                        <li>Transporte incluido</li>
                    </ul>

                    <p><strong>Ideal para:</strong> viajeros aventureros.</p>
                </div>

                <div class="card-footer bg-white text-center">
                    <a href="#" class="btn btn-info text-white">
                        Solicita información con nuestro agentes 
                    </a>
                </div>

            </div>
        </div>

    </div>

</div>

@endsection
