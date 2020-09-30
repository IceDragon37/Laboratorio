@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">PC-ID</th>
                <th scope="col">Estado</th>
                <th scope="col">Alumno asignado</th>
                <th scope="col">Profesor a cargo</th>
              </tr>
            </thead>
            <tbody>
                    <tr>
                        <th>PC-01</th>
                        <td>Ocupado</td>
                        <td>Franco Ortiz</td>
                        <td>Leslie Pérez</td>
                    </tr>                
                    <tr>
                        <th>PC-02</th>
                        <td>Ocupado</td>
                        <td>Marcos Rojas</td>
                        <td>Sebastian Berrios</td>
                    </tr>
                    <tr>
                        <th>PC-03</th>
                        <td>Disponible</td>
                        <td><a class="btn btn-primary" href="/asignarAlumno" role="button">Asignar Alumno</a></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>PC-04</th>
                        <td>Ocupado</td>
                        <td>Roberto Suarez</td>
                        <td>Hector Allende</td>

                    </tr>
                    <tr>
                        <th>PC-05</th>
                        <td>Disponible</td>
                        <td><a class="btn btn-primary" href="/asignarAlumno" role="button">Asignar Alumno</a></td>
                        <td>-</td>
                    </tr>
            </tbody>
          </table>

    </div>
</div>
@endsection
