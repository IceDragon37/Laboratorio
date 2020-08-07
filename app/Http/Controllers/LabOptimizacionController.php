<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabOptimizacionController extends Controller
{
    public function AgregarEquipo(){
        return view('LabOptimizacion/agregarNuevoEquipo');
        // Primer parametro coincide con resources/views/documentos/manuales.blade.php
    }
    public function AsignarAlumno(){
        return view('LabOptimizacion/asignarAlumno');
        // Primer parametro coincide con resources/views/documentos/manuales.blade.php
    }
    
    public function ListarEquipos(){
        return view('LabOptimizacion/listarEquipos');
        // Primer parametro coincide con resources/views/documentos/manuales.blade.php
    }
}
