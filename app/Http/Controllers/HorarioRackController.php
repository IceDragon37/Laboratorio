<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorarioRackController extends Controller
{
    public function index()
    {
        $nombre_ayudante='Juanin Juan Harry';

        return view('horario_rack',compact('nombre_ayudante'));
    }
}
