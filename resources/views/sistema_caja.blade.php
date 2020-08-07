@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('content')
<div class="container">
    <!-- <div class="container-fluid"> -->
        <table class="table" style="width:10px" border action="operacion_guardar.php" method="POST">
        <thead class="thead-dark" >
                <tr><th scope="col" >Fecha</th>
                    <td><input type="text" name="fechacaja" placeholder="fecha" value=""/></td>
                </tr>
                <tr>
                    <th scope="col">Nombre ayudante</th>
                    <td><input type="text" name="nombreyudante" placeholder="nombreyudante" value=""/></td>
                </tr>
                <tr>
                    <th scope="col">$10000</th>
                    <td><input type="text" name="diezmil" placeholder="diezmil" value=""/></td>
                </tr>
                <tr>
                    <th scope="col">$5000</th>
                    <td><input type="text" name="cincomil" placeholder="cincomil" value=""/></td>
                </tr>
                <tr>
                    <th scope="col">$2000</th>
                    <td><input type="text" name="dosmil" placeholder="dosmil" value=""/></td>
                </tr>
                <tr>
                    <th scope="col">$1000</th>
                    <td><input type="text" name="mil" plaecholder="mil" value=""/></td>
                </tr>
                <tr>
                    <th scope="col">$500</th>
                    <td><input type="text" name="quinientos" placeholder="quinientos" value=""/></td>
                </tr>
                <tr>
                    <th scope="col">$100</th>
                    <td><input type="text" name="cien" placeholder="cien" value=""/></td>
                </tr>
                <tr>
                    <th scope="col">$50</th>
                    <td><input type="text" name="cincuenta" placeholder="cincuenta" value=""/></td>
                </tr>
                <tr>
                    <th scope="col">$10</th>
                    <td><input type="text" name="diez" placeholder="diez" value=""/></td>
                </tr>
                <tr>
                    <th scope="col">Total ingreso</th>
                    <td><input type="text" name="totalingreso" placeholder="totalingreso" value=""/></td>
                </tr>
                <tr>
                    <th scope="col">Retiro</th>
                    <td><input type="text" name="retiro" placeholder="retiro" value=""/></td>
                </tr>
                <tr>
                    <th scope="col">Monto total</th>
                    <td><input type="text" name="totalmonto" placeholder="totalmonto" value=""/></td>
                </tr>
                <tr>
                    <td><input type="submit" value="agregar nuevo monto"></td>
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