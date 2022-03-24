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

    <h1 class="titulos2">Mis Compras</h1>
    <br>
    <div class="container">
        <form method="POST" action="../Compras/vBuscarCompra.php">
            <div class="form-group">
                    <label class="label" for="fecha1"><h4>fecha 1</h4></label><br>
                    <input type="text" class="form-control" id="fecha1" name="fecha1"  required>
            </div>
            <div class="form-group">
                    <label class="label" for="fecha2"><h4>fecha 2</h4></label><br>
                    <input type="text" class="form-control" id="fecha2" name="fecha2" required>
            </div>
            <button type="submit" class="btn btn-success" id="buscar"><h5>Buscar Compras</h5></button>
        </form>
    </div>
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
                    <th>Valor Total del Producto</th>
                    <th>Usuario Nº</th>
                    <th>Fecha Compra</th>
                    <th>Valor Total de la compra</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($listaCompra as $compra) { ?>
                <tr>
                    <th><?= $compra->id ?></th>
                    <td><?= $compra->nombreProducto ?></td>
                    <td><?= $compra->descripcionProducto ?></td>
                    <td>$<?= $compra->precioBaseProducto ?></td>
                    <td>$<?= $compra->tasaImpuestosProducto ?></td>
                    <td><?= $compra->estadoProducto ?></td>
                    <td><?= $compra->cantidadEnInventario ?></td>
                    <td><?= $compra->cantidadProducto ?></td>
                    <td><?= $compra->productoId ?></td>
                    <td><?= $compra->usuarioNumero ?></td>
                    <td><?= $compra->totalCarrito ?></td>
                    <td><?= $compra->carritoId ?></td>
                    <td><?= $compra->fechaCompra ?></td>
                    <td>$<?= $compra->totalCompra ?></td>
                <?php } ?>
                </tr>
            </tbody>
        </table>   
    </div>
    <br>
    
</section>