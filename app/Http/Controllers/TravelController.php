<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelController extends Controller
{

    public function inicio()
    {
        return view('travel.inicio');
    }

    public function destinos()
    {
        return view('travel.destinos');
    }

    public function paquetes()
    {
        return view('travel.paquetes');
    }

    public function contacto()
    {
        return view('travel.contacto');
    }

    public function destino($nombre)
    {
        $destinos = [

            'cancun' => [
                'titulo' => 'Cancún',
                'imagen' => 'img/cancun.webp',
                'descripcion' =>
                    'Cancún es uno de los destinos más populares del Caribe mexicano,
                    famoso por sus playas de arena blanca, aguas turquesa y una gran
                    variedad de actividades acuáticas y vida nocturna.'
            ],

            'riviera-maya' => [
                'titulo' => 'Riviera Maya',
                'imagen' => 'img/Riviera.webp',
                'descripcion' =>
                    'La Riviera Maya ofrece una combinación perfecta entre naturaleza,
                    cultura y lujo. Sus cenotes, ruinas mayas y playas paradisíacas
                    la convierten en un destino ideal para relajarse.'
            ],

            'los-cabos' => [
                'titulo' => 'Los Cabos',
                'imagen' => 'img/LosCabos.jpg',
                'descripcion' =>
                    'Los Cabos es conocido por sus paisajes desérticos, formaciones
                    rocosas icónicas y hoteles de lujo. Perfecto para quienes buscan
                    aventura y descanso frente al mar.'
            ],

            'puerto-vallarta' => [
                'titulo' => 'Puerto Vallarta',
                'imagen' => 'img/Puerto.jpg',
                'descripcion' =>
                    'Puerto Vallarta combina playas hermosas con un ambiente tradicional
                    mexicano. Su malecón, gastronomía y atardeceres lo hacen un destino
                    inolvidable.'
            ],
        ];

        //  Validar que el destino exista
        if (!array_key_exists($nombre, $destinos)) {
            abort(404);
        }

        return view('travel.destino_detalle', [
            'destino' => $destinos[$nombre]
        ]);
    }
}
