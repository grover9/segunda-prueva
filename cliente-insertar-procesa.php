<?php
require_once('librerias/conexionBD.php');



$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$carnet = $_POST['carnet'];
$celular = $_POST['celular'];
$dir = $_POST['dir'];


$sql = "INSERT INTO clientes (nombre,apellidos,ci,celular,direccion) VALUES ('$nombres','$apellidos','$carnet','$celular','$dir')";

$result =  $con->query($sql);


if ($result != null) {
    print "<script>alert(\"Registro Exitoso \");window.location='clientes.php';</script>";
} else {
    print "<script>alert(\"Error al registrar..\");window.location='clientes.php';</script>";
}
