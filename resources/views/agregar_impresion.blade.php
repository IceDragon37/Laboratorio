@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('content')
<div class="container">
    <!-- <div class="container-fluid"> -->
        <table class="table" border style="width:10px">
        <thead class="thead-dark" >
                <tr><th scope="col" >Fecha</th>
                    <td><input type="text" name="fechacaja" placeholder="fecha" value=""/></td>
                </tr>
                <tr>
                    <th scope="col">Nombre ayudante</th>
                    <td><input type="text" name="nombreyudante" placeholder="nombreyudante" value=""/></td>
                </tr>
                <tr>
                    <th scope="col">Total hojas</th>
                    <td><input type="text" name="totalhojas" placeholder="total hojas" value=""/></td>
                </tr>
                <tr>
                    <th scope="col">Profesor/ayudante</th>
                    <td><input type="text" name="profesor" placeholder="profesor" value=""/></td>
                </tr>
                <tr>
                    <th scope="col">Total monto</th>
                    <td><input type="text" name="totalmonto" placeholder="total" value=""/></td>
                </tr>
                <tr>
                    <td><input type="submit" value="agregar impresion"></td>
                </tr>
            </thead>
            <tbody>
                    <tr>

                    </tr>
            </tbody>
        </table>
    <!-- </div> -->
</div>
@endsection