<section>
    <br>
    <h1 class="titulos2">Dettalle de Compra</h1>
    <div class="container">
        <form action="storeCompra.php" method="post">
            <div class="container">  
                <div class="form-group">
                    <label class="label" for="nombre"><h4>Nombre Producto </h4></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $carritoId->nombreProducto ?>">
                </div> 
                <div class="form-group">
                    <label class="label" for="descripcion"><h4>Descripción Producto </h4></label><br>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?= $carritoId->descripcionProducto ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="label" for="precioBase"><h4>Precio Base </h4></label><br>
                    <input type="number" class="form-control" id="precioBase" name="precioBase" value="<?= $carritoId->precioBaseProducto ?>">
                </div>
                <div class="form-group">
                    <label class="label" for="tasaImpuestos"><h4>Tasa de Impuesto </h4></label><br>
                    <input type="float" class="form-control" id="tasaImpuestos" name="tasaImpuestos" value="<?= $carritoId->tasaImpuestosProducto ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="label" for="estado"><h4>Estado </h4></label><br>
                    <input type="text" class="form-control" id="estado" name="estado" value="<?= $estado ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="label" for="totalCarrito"><h4>Valor Unitario Producto </h4></label><br>
                    <input type="float" class="form-control" id="totalCarrito" name="totalCarrito" value="$<?= $carritoId->totalProducto ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="label" for="cantidadEnInventario"><h4>Disponible </h4></label><br>
                    <input type="number" class="form-control" id="cantidadEnInventario" name="cantidadEnInventario" value="<?= $carritoId->cantidadEnInventario ?>" readonly>
                </div> 
                <div class="form-group">
                    <label class="label" for="cantidadProducto"><h4>Cantidad en mi Carrito</h4></label><br>
                    <input type="number" class="form-control" id="cantidadProducto" name="cantidadProducto" value="<?= $carritoId->cantidadProducto ?>">
                </div>
                <div class="form-group">
                    <label class="label" for="productoId"><h4>Producto Nº </h4></label><br>
                    <input type="number" class="form-control" id="productoId" name="productoId" value="<?= $carritoId->productoId ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="label" for="usuarioId"><h4>Usuario Nº </h4></label><br>
                    <input type="number" class="form-control" id="usuarioId" name="usuarioId" value="<?= $carritoId->usuarioId ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="label" for="carritoId"><h4>Carrito Nº </h4></label><br>
                    <input type="number" class="form-control" id="carritoId" name="carritoId" value="<?= $carritoId->id ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="label" for="fechaCompra"><h4>fecha</h4></label><br>
                    <input type="text" class="form-control" id="fechaCompra" name="fechaCompra" value="<?= $fechaCompra ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="label" for="totalCompra"><h4>Total Compra </h4></label><br>
                    <input type="float" class="form-control" id="totalCompra" name="totalCompra" value="<?= $carritoId->totalProducto * $carritoId->cantidadProducto ?>" readonly>
                </div>
                <br>
                <button type="submit" class="btn btn-secondary" id="btnCrear"><h5>Realizar Compra</h5></button>
                <button style="margin-left: 10%" type="reset" class="btn btn-secondary"><h5>Restablecer</h5></button>
            </div>     
        </form>
    </div>
    <br>
</section>