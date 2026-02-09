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
        return view('travel.destino_detalle', compact('nombre'));
    }
}
