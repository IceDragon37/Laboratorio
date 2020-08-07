<?php
namespace App\Http\Controllers;

use App\http\Controllers\Controller;

class agregarImpresionController extends Controller {
    public function agregarImpresion(){
        return view('agregar_impresion');
    }
}