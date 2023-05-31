<?php
require '../../modelo/cliente.php';
    try {
        $cliente = new cliente($_GET);

        $cliente = $cliente->buscar();
        // echo "<pre>";
        // var_dump($clientes[0]['cliente_ID']);
        // echo "</pre>";
        // exit;
        // $error = "NO se guardó correctamente";
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
?>
<?php include_once '../../includes/header.php'?>
    <div class="container">
        <h1 class="text-center">Modificar clientes</h1>
        <div class="row justify-content-center">
            <form action="/crudphp18may2023/controladores/clientes/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="cliente_id" value="<?= $clientes[0]['cliente_ID'] ?>" >
                <div class="row mb-3">
                    <div class="col">
                        <label for="cliente_nombre">Nombre del cliente</label>
                        <input type="text" name="cliente_nombre" id="cliente_nombre" class="form-control" value="<?= $clientes[0]['cliente_NOMBRE'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cliente_precio">Precio del cliente</label>
                        <input type="number" step="0.01" min="0" name="cliente_precio" id="cliente_precio" class="form-control" value="<?= $clientes[0]['cliente_PRECIO'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-warning w-100">Modificar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>
