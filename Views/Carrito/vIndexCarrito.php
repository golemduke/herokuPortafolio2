<section>
    <br>
    <br>
    <div class="container">
        <?php if (isset($_GET["accion"])) { ?>
            <div class="<?= $clase ?>" role="alert">
                <?= $mensaje ?>
            </div>
        <?php } ?>
    </div>

    <h1 class="titulos2">Productos en mi Carrito</h1>
    <br>
    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre Producto</th>
                    <th>Descripción Producto</th>
                    <th>Precio Base Producto</th>
                    <th>Tasa De Impuestos Producto</th>
                    <th>Estado Producto</th>
                    <th>Cantidad en Inventario</th>
                    <th>Cantidad Producto</th>
                    <th>ID Producto</th>
                    <th>ID Usuario</th>
                    <th>Valor Total del Carrito</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($listaCarrito as $carrito) { ?>
                <tr>
                    <th><?= $carrito->id ?></th>
                    <td><?= $carrito->nombreProducto ?></td>
                    <td><?= $carrito->descripcionProducto ?></td>
                    <td>$<?= $carrito->precioBaseProducto ?></td>
                    <td>$<?= $carrito->tasaImpuestosProducto ?></td>
                    <td><?= $carrito->estadoProducto ?></td>
                    <td><?= $carrito->cantidadEnInventario ?></td>
                    <td><?= $carrito->cantidadProducto ?></td>
                    <td><?= $carrito->productoId ?></td>
                    <td><?= $carrito->usuarioId ?></td>
                    <td>$<?= $carrito->totalProducto * $carrito->cantidadProducto ?></td>
                    <td>
                    <a class="btn btn-warning" href="../Compras/createCompra.php?id=<?= $carrito->id ?>" role="button">Comprar</a> 
                    </td>
                    <br>
                    <td>
                    <a class="btn btn-warning" href="editCarrito.php?id=<?= $carrito->id ?>" role="button">Modificar</a>
                    <br>    
                    <a class="btn btn-danger" href="destroyCarrito.php?id=<?= $carrito->id ?>" role="button">Eliminar</a>
                    </td>
                <?php } ?>
                </tr>
            </tbody>
        </table>   
    </div>
    <br>
    
</section>