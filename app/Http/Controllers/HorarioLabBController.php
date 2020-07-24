<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorarioLabBController extends Controller
{
	public function index()
    {
        $nombre_ayudante='Juanin Juan Harry';


        return view('horario_labB',compact('nombre_ayudante'));
    }
}
