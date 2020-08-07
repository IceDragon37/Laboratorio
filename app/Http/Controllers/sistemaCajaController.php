<?php
namespace App\Http\Controllers;

use App\http\Controllers\Controller;

class sistemaCajaController extends Controller {
    public function caja(){
        return view('sistema_caja');
    }
}