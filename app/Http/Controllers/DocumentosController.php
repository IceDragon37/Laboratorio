<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    public function manuales(){
        return view('documentos/manuales');
        // Primer parametro coincide con resources/views/documentos/manuales.blade.php
    }
    
}
