<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mar y Arena Travel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background-color:#E6DFD5;
        }

        .navbar-custom{
            background-color:#2FA4B3;
        }

        .hero{
            background-image:url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e');
            background-size:cover;
            background-position:center;
            height:400px;
            display:flex;
            align-items:center;
            justify-content:center;
            color:white;
            text-align:center;
        }

        .hero-overlay{
            background:rgba(0,0,0,0.4);
            padding:30px;
            border-radius:10px;
        }

        .section-title{
            color:#2FA4B3;
            font-weight:bold;
        }

        .card-custom{
            background-color:#6FAFB0;
            color:white;
            border:none;
        }
    </style>

</head>

<body>

    <!-- HEADER -->
    @include('components.header')

    <!-- CONTENIDO DE LAS VISTAS -->
    <div class="container mt-4">
        @yield('contenido')
    </div>

    <!-- FOOTER -->
    @include('components.footer')

</body>
</html>
