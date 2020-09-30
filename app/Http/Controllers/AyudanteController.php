<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AyudanteController extends Controller
{
    public function AgregarAyudante(){
        return view('ayudante/agregarAyudante');
        // Primer parametro coincide con resources/views/documentos/manuales.blade.php
    }
    public function ListarAyudante(){
        return view('ayudante/listarAyudantes');
        // Primer parametro coincide con resources/views/documentos/manuales.blade.php
    }
    
    public function index()
    {
        return view('ayudante/agregarAyudante');
    }
}
