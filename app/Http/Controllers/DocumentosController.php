<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    public function manuales(){
        return view('documentos/manuales');
        // Primer parametro coincide con resources/views/documentos/manuales.blade.php
    }
    
    public function tutoriales(){
        return view('documentos/tutoriales');
        // Primer parametro coincide con resources/views/documentos/manuales.blade.php
    }

    public function claves(){
        return view('documentos/claves');
        // Primer parametro coincide con resources/views/documentos/manuales.blade.php
    }
}
