<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificacionController extends Controller
{
    public function prueba(){
        alert()->success('Mensaje Correcto!!! Esta es una alerta de prueba', 'Titulo de la alerta de prueba');
        return view('prueba');
    }
    
    public function nuevo(){

        return view('nuevo');
    }

    public function lista(){
        return view('lista');
    }

    public function nuevaAlerta(){
        alert()->success('Esto deberia salir si salio todo bien :D', 'Nueva Alerta');
        return view('nuevo');
    }
}
