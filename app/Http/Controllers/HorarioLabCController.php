<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorarioLabCController extends Controller
{
    public function index()
    {
        $nombre_ayudante='Juanin Juan Harry';


        return view('horario_labC',compact('nombre_ayudante'));
    }
}
