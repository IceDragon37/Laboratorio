<?php
include("conexioncaja.php");
    $fecha= $_POST["fecha"];
    $nombreayudante= $_POST["nombreayudante"];
    $diezmil= $_POST["diezmil"];
    $cincomil= $_POST["cincomil"];
    $dosmil= $_POST["dosmil"];
    $mil= $_POST["mil"];
    $quinientos= $_POST["quinientos"];
    $cien= $_POST["cien"];
    $cincuenta= $_POST["cincuenta"];
    $diez= $_POST["diez"];
    $totalingreso= $_POST["totalingreso"];
    $retiro= $_POST["retiro"];
    $totalmonto= $_POST["totalmonto"];

    $query="INSERT INTO sistema_caja(fecha, ayudante, diezmil,cincomil, dosmil, mil, quinientos,  diez, totalingreso, retiro, totalmonto) VALUES($fecha','$nombreayudante','$diezmil','$cincomil','$dosmil','$mil','$quinientos','$cien','$cincuenta','$diez','$totalingreso','$retiro','$totalmonto')";
    $resultado=$conexioncaja->query($query);

    if($resultado)
    {
        echo "exitoso";
    }
    else
    {
        echo "no exitoso";
    }
?>