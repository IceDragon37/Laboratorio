@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('content')

    <div class="container">
        <table class="table" border>
            <thead class="thead-dark">
                <tr>
                    <th>Fecha</th>
                    <th>Ayudante</th>
                    <th>Numero de hojas</th>
                    <th>Profesor/ayudante</th>
                    <th>Monto total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12-3-2020</td>
                    <td>Javier Fernandez</td>
                    <td>60</td>
                    <td>Sebastian Berrios</td>
                    <td>1200</td>
                </tr>
                <tr>
                    <td>12-3-2020</td>
                    <td>Lorena Moreriera</td>
                    <td>50</td>
                    <td>Ricardo Soto</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td>12-3-2020</td>
                    <td>Marcos Rojas</td>
                    <td>100</td>
                    <td>Sebastian Berrios</td>
                    <td>2000</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection