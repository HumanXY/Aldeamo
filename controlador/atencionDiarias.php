<?php
include '../clases/Conexion.php';
include '../clases/Reporte.php';

$objConexion = new Conexion();
$objReporte = new Reporte();

$conexion = $objConexion->conexion();

$fecha = $_POST['fecha'];

$datos = $objReporte->atencionesDiarias($fecha, $conexion);

print_r($datos);

while ($row = mysqli_fetch_array($datos)) {
    echo $row['NumAtencion'];
}
