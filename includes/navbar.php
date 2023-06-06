<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Ingreso de clientes</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        cliente
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li class="nav-item">
                            <a class="nav-link" href="/crud_clientes/vistas/clientes/index.php">ingresar cliente</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/crud_clientes/vistas/clientes/buscar.php">buscar cliente</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ventas
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li class="nav-item">
                            <a class="nav-link" href="/crud_clientes/vistas/ventas/index.php">Ingresar venta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/crud_clientes/vistas/ventas/buscar.php">Buscar venta</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/crud_clientes/controladores/ventas/detalle_ventas.php">detalle_venta</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Productos
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li class="nav-item">
                            <a class="nav-link" href="/crud_clientes/vistas/productos/index.php">Crear producto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/crud_clientes/vistas/productos/buscar.php">Buscar producto</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>