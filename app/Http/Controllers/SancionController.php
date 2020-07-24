<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SancionController extends Controller
{
    public function sanciones(){
        $rut = '12.654.987-4';
            $nombre = 'Marcos';
            $apellido = 'Toro';
            $descripcion = 'alkjsdkajsd';
            $razon = 'aklsjdaksjdl';
        $sancion = [$rut, $nombre, $apellido, $descripcion, $razon];
        
        $sanciones = [$sancion];
        return view('sanciones')->with($sanciones);
    }
}
