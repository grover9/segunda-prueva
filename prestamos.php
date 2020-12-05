<?php
include_once('librerias/cab.php');
?>

<?php
require_once('librerias/conexionBD.php');
$sql = "select * from prestamos";
$result =  $con->query($sql);
$usuarios = array();
while ($fila =  $result->fetch_array()) {
    $usuarios[] = $fila;
}
?>
<div class="container-12">


    <div class="col py-4 mx-auto">

        <h1 class="text-center">Prestamos</h1>
        <p>
            <a href="empleado-insertar.php" class="btn btn-success"> Insertar Nuevo Empleado</a>
        </p>
        <table class="table table-striped text-center">
            <tr>
                
                <th>Nro. CI. de  Cliente</th>
                <th>Monto Prestado</th>
                <th>Couta Mensual</th>
                <th>Asesor</th>
                
                <th colspan="2">Detalles</th>
            </tr>
            <?php foreach ($usuarios as $item) : ?>
                <tr>
                    
                    <td><?= $item['ci_cli'] ?></td>
                    <td><?= $item['monto'] ?></td>
                    <td><?= $item['fecha_pago'] ?></td>
                    <td><?= $item['couta'] ?></td>
                    <td><?= $item['id_emp'] ?></td>
                    <td><?= $item['id_cli'] ?></td>


                    <td>
                        <a href="prestamo-modifica.php?id=<?= $item['id_pre'] ?>" class="btn btn-primary">Editar</a>
                    </td>
                    <td>
                        <a href="prestamo-elimina.php?id=<?= $item['id_pre'] ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>

</div>


<?php
include_once('librerias/pie.php');
?>