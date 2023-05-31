<?php
require '../../modelos/Cliente.php';
    try {
        $cliente = new Cliente($_GET);

        $clientes = $cliente->buscar();
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
            <form action="/crud_clientes/controladores/clientes/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="cliente_id" value="<?= $clientes[0]['CLIENTE_ID'] ?>" >
                <div class="row mb-3">
                    <div class="col">
                        <label for="cliente_nombre">Nombre del cliente</label>
                        <input type="text" name="cliente_nombre" id="cliente_nombre" class="form-control" value="<?= $clientes[0]['CLIENTE_NOMBRE'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cliente_apellido">apellido del cliente</label>
                        <input type="text" name="cliente_apellido" id="cliente_apellido" class="form-control" value="<?= $clientes[0]['CLIENTE_APELLIDO'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cliente_nit">nit del cliente</label>
                        <input type="text"  min="0" name="cliente_nit" id="cliente_nit" class="form-control" value="<?= $clientes[0]['CLIENTE_NIT'] ?>">
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
