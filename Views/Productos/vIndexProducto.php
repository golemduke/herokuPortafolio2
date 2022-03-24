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
    <h1 class="titulos2">Listado de Productos</h1>
    <br>
    
    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio Base</th>
                    <th>Tasa De Impuestos</th>
                    <th>Estado</th>
                    <th>Cantidad en Inventario</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($listaProductos as $producto) { ?>
                <tr>
                    <th><?= $producto->id ?></th>
                    <td><?= $producto->nombre ?></td>
                    <td><?= $producto->descripcion ?></td>
                    <td>$<?= $producto->precioBase ?></td>
                    <td>$<?= $producto->tasaImpuestos?></td>
                    <td><?= $producto->estado ?></td>
                    <td><?= $producto->cantidadEnInventario ?></td>
                    <td>
                    <?php 
                  if ($_SESSION["tipo"] == 2){ ?>
                    <a class="btn btn-success" href="../Carrito/createCarrito.php?id=<?= $producto->id ?>" role="button">Añadir al Carrito</a>
                    <?php } ?>
                    <?php 
                  if ($_SESSION["tipo"] == 1){ ?>
                        <a class="btn btn-warning" href="editProducto.php?id=<?= $producto->id ?>" role="button">Modificar</a>
                        <a class="btn btn-danger" href="destroyProducto.php?id=<?= $producto->id ?>" role="button">Eliminar</a>
                    </td>
                    <?php } ?>
                <?php } ?>
                </tr>
            </tbody>
        </table>    
    </div>
    <br>
</section>