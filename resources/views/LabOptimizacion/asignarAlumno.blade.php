@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="container-fluid h-100 bg-light text-dark">
    <div class="row justify-content-center align-items-center">
        <h1>Asignar equipo a un alumno</h1>    
    </div>
        <form >
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Escoja el equipo:</label>
            <div class="col-sm-10">
            <div class="form-group">
            <select class="form-control">
                        <option>Seleccione un equipo</option>
                        <option>PC-01</option>
                        <option>PC-03</option>
                        <option>PC-05</option>
                    </select>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nombre Alumno:</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="Nombre1 Nombre2 Apellido1 Apellido2">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Run:</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="12.345.678-9">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
            <input  class="form-control" id="inputPassword" placeholder="email@ejemplo.xx">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Celular:</label>
            <div class="col-sm-10">
            <input class="form-control" id="inputPassword" placeholder="+56987654321">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Profesor Acargo:</label>
            <div class="col-sm-10">
            <div class="form-group">
            <select class="form-control">
                        <option>Seleccione una opción</option>
                        <option>Leslie Pérez</option>
                        <option>Hector Allende</option>
                        <option>Sebastian Berrios</option>
                    </select>
            </div>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Fecha de Inicio:</label>
            <div class="col-sm-10">
            <div class="form-group">
            <input type="date" id="start" name="trip-start" value="2020-08-12" min="2020-01-01" max="2030-12-31">
            </div>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Fecha de Termino:</label>
            <div class="col-sm-10">
            <div class="form-group">
            <input type="date" id="start" name="trip-start" value="2020-08-12" min="2020-01-01" max="2030-12-31">
            </div>
            </div>
        </div>
        <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    Asignar Equipo
                                </button>
        </form>
    </div>
</div>

@endsection