
<section>
    <br>
    <h1 class="titulos2">Crear Producto</h1>
    <div class="container">
        <form action="updateProducto.php" method="post">
        <div class="container">    
        <div class="form-group">
                <label class="label" for="id"><h4>Nº Id </h4></label>
                <input type="number" class="form-control" id="id" name="id" value="<?= $productoId->id ?>" readonly>
            </div>    
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
                <label class="label" for="estado"><h4>Estado</h4></label>
                <select class="form-control" id="estado" name="estado">
                    <?php foreach ($listaEstados as $estado) { ?>
                        <option value="<?= $estado->id ?>" <?php if ($estado->id == $productoId->estado){ ?>
                            selected <?php } ?>
                            ><?= $estado->estado ?></option> 
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label class="label" for="cantidadEnInventario"><h4>En Inventario </h4></label><br>
                <input type="number" class="form-control" id="cantidadEnInventario" name="cantidadEnInventario" value="<?= $productoId->cantidadEnInventario ?>">
            </div> 
            <br>
            <button type="submit" class="btn btn-secondary" id="btnCrear"><h5>Actualizar</h5></button>
            <button style="margin-left: 10%" type="reset" class="btn btn-secondary"><h5>Restablecer</h5></button>
            </div>     
        </form>
    </div>
    <br>
</section>