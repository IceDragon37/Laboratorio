@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="container-fluid h-100 bg-light text-dark">
    <div class="row justify-content-center align-items-center">
        <h1>Nuevo Equipo</h1>    
    </div>
        <form >
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Identificador del Equipo:</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="PC-XX">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Procesador:</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="2.X Ghz">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Memoria RAM:</label>
            <div class="col-sm-10">
            <div class="form-group">
            <select class="form-control">
                        <option>Seleccione una opción</option>
                        <option>4 GB</option>
                        <option>8 GB</option>
                        <option>16 GB</option>
                    </select>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Disco Duro:</label>
            <div class="col-sm-10">
            <div class="form-group">
            <select class="form-control">
                        <option>Seleccione una opción</option>
                        <option>240 GB</option>
                        <option>512 GB</option>
                        <option>1024 GB</option>
                    </select>
            </div>
            </div>
        </div>
        <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    Agregar Equipo
                                </button>
        </form>
    </div>
</div>

@endsection