<?php
namespace App\Http\Controllers;

use App\http\Controllers\Controller;

class verImpresionesController extends Controller {
    public function verImpresiones(){
        return view('ver_impresiones');
    }
}