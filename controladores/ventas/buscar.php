<?php
require_once '../../modelos/Venta.php';

try {
    $_GET['venta_fecha'] = $_GET['venta_fecha'] != '' ? date('Y-m-d', strtotime($_GET['venta_fecha'])) : '';
    $venta = new Venta($_GET);
    $ventas = $venta->buscar();
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2){
    $error = $e2->getMessage();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Resultado de ventas</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>NO.</th>
                            <th>CLIENTE</th>
                            <th>FECHA</th>
                            <th>DETALLE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($ventas) > 0):?>
                        <?php foreach($ventas as $key => $venta) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $venta['cliente_nombre'] ?></td>
                            <td><?= $venta['venta_fecha'] ?></td>
                            <td><a class="btn btn-info w-100" href="/crud_clientes/vistas/ventas/detalle.php?venta_id=<?= $venta['venta_id']?>">VER DETALLE</a></td>
                        </tr>
                        <?php endforeach ?>
                        <?php else :?>
                            <tr>
                                <td colspan="4">NO EXISTEN REGISTROS</td>
                            </tr>
                        <?php endif?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <a href="/crud_clientes/vistas/ventas/buscar.php" class="btn btn-info w-100">Volver al formulario</a>
            </div>
        </div>
    </div>
</body>
</html>

