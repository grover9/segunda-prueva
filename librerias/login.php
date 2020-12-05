
<?php
session_start();
require_once('conexionBD.php');

$celular = $_POST['celular'];
$pass = md5($_POST['pass']);

$sql =  "SELECT empleados.id_emp, cargo, empleados.celular, empleados.pass
FROM empleados, roles
WHERE empleados.id_emp = roles.id_emp  AND empleados.celular = '$celular' AND empleados.pass = '$pass' LIMIT 1";

$result = $con->query($sql);

foreach ($result as $consulta) {
    $id = $consulta["id_emp"];
    $cargo = $consulta["cargo"];
}

if ($result->num_rows > 0) {

    $_SESSION["id_emp"] = $id;
    $_SESSION["cargo"] = $cargo;

    print "<script>alert(\"Bienvenido  \");window.location='../inicio.php';</script>";
} else {
    print "<script>alert(\"Empleado no Registrado.\");window.location='../index.php';</script>";
}


?>