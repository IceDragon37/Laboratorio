@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="container-fluid h-100 bg-light text-dark">
    <div class="row justify-content-center align-items-center">
        <h1>Nuevo Ayudante</h1>    
    </div>
        <form >
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nombre ayudante:</label>
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
            <label for="inputPassword" class="col-sm-2 col-form-label">Run:</label>
            <div class="col-sm-10">
            <input  class="form-control" id="inputPassword" placeholder="12.345.678-9">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña:</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="12345678">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Banco para deposito:</label>
            <div class="col-sm-10">
            <div class="form-group">
            <select class="form-control">
                        <option>Seleccione una opción</option>
                        <option>Banco Estado</option>
                        <option>Banco de Chile</option>
                        <option>Banco Santander</option>
                    </select>
            </div>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Tipo de cuenta:</label>
            <div class="col-sm-10">
            <div class="form-group">
            <select class="form-control">
                        <option>Seleccione una opción</option>
                        <option>Cuenta vista</option>
                        <option>Cuenta corriente</option>
                    </select>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Número de cuenta:</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="000000000000">
            </div>
        </div>
        <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    Agregar Ayudante
                                </button>
        </form>
    </div>
</div>

@endsection