<section>
    <br>
    <h1 class="titulos2">Anadir al Carrito</h1>
    <div class="container">
        <form action="storeCarrito.php" method="post">
            <div class="container">  
                <div class="form-group">
                    <label class="label" for="nombre"><h4>Nombre Producto </h4></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $productoId->nombre ?>">
                </div> 
                <div class="form-group">
                    <label class="label" for="descripcion"><h4>Descripción Producto </h4></label><br>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?= $productoId->descripcion ?>">
                </div>
                <div class="form-group">
                    <label class="label" for="precioBase"><h4>Precio Base </h4></label><br>
                    <input type="number" class="form-control" id="precioBase" name="precioBase" value="<?= $productoId->precioBase ?>">
                </div>
                <div class="form-group">
                    <label class="label" for="tasaImpuestos"><h4>Tasa de Impuesto </h4></label><br>
                    <input type="float" class="form-control" id="tasaImpuestos" name="tasaImpuestos" value="<?= $productoId->tasaImpuestos ?>">
                </div>
                <div class="form-group">
                    <label class="label" for="estado"><h4>Estado </h4></label><br>
                    <input type="text" class="form-control" id="estado" name="estado" value="<?= $estado ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="label" for="totalProducto"><h4>Valor Unitario Producto </h4></label><br>
                    <input type="float" class="form-control" id="totalProducto" name="totalProducto" value="$<?= $totalProducto ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="label" for="cantidadEnInventario"><h4>Disponible </h4></label><br>
                    <input type="number" class="form-control" id="cantidadEnInventario" name="cantidadEnInventario" value="<?= $productoId->cantidadEnInventario ?>">
                </div> 
                <div class="form-group">
                    <label class="label" for="cantidadProducto"><h4>Añadir A mi Carrito</h4></label><br>
                    <input type="number" class="form-control" id="cantidadProducto" name="cantidadProducto" >
                </div>
                <div class="form-group">
                    <label class="label" for="productoId"><h4>Producto ID </h4></label><br>
                    <input type="number" class="form-control" id="productoId" name="productoId" value="<?= $productoId->id ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="label" for="usuarioId"><h4>Usuario ID </h4></label><br>
                    <input type="number" class="form-control" id="usuarioId" name="usuarioId" value="<?= $idUsuario ?>" readonly>
                </div>
                <br>
                <button type="submit" class="btn btn-secondary" id="btnCrear"><h5>Añadir Carrito</h5></button>
                <button style="margin-left: 10%" type="reset" class="btn btn-secondary"><h5>Restablecer</h5></button>
            </div>     
        </form>
    </div>
    <br>
</section>