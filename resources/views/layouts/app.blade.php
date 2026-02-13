<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horizonte Viajero</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background-color:#E6DFD5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar-custom{
            background-color:#2FA4B3;
        }

        /* imagen grande superior */
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
            border-radius:12px;
        }

        .hero-overlay{
            background:rgba(0,0,0,0.4);
            padding:30px 40px;
            border-radius:12px;
        }

        /* Titulos */
        .section-title{
            color:#2FA4B3;
            font-weight:bold;
        }

        /* destinos  */
        .card{
            border:none;
            border-radius:12px;
            overflow:hidden;
            transition:0.3s ease;
        }

        .card:hover{
            transform:translateY(-5px);
            box-shadow:0px 8px 20px rgba(0,0,0,0.2);
        }

        .card img{
            height:200px;
            object-fit:cover;
        }

        .card-body{
            background:#ffffff;
        }

        /* detalles destinos */
        .destino-container{
            max-width:800px;
            margin:auto;
            text-align:center;
        }

        .destino-titulo{
            color:#2FA4B3;
            font-weight:bold;
            margin-bottom:20px;
        }

        .destino-img{
            width:100%;
            height:350px;
            object-fit:cover;
            border-radius:15px;
            box-shadow:0px 6px 15px rgba(0,0,0,0.2);
            margin-bottom:25px;
        }

        .destino-descripcion{
            font-size:18px;
            color:#555;
            line-height:1.6;
        }

        .btn-volver{
            background-color:#2FA4B3;
            border:none;
            padding:10px 20px;
            border-radius:8px;
        }

        .btn-volver:hover{
            background-color:#238d99;
        }

    </style>

</head>

<body>

    <!-- HEADER -->
    @include('components.header')

    <!-- CONTENIDO DINÁMICO -->
    <main class="container mt-4">
        @yield('contenido')
    </main>

    <!-- FOOTER -->
    @include('components.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
