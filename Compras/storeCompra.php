<?php
	require_once "../Models/Compra.php";
    require_once "../Models/Producto.php";

	$compra = new Compra();
	$compra->nombreProducto = $_POST["nombre"];
	$compra->descripcionProducto = $_POST["descripcion"];
	$compra->precioBaseProducto = $_POST["precioBase"];
	$compra->tasaImpuestosProducto = $_POST["tasaImpuestos"];
    $compra->estadoProducto = $_POST["estado"];
    $compra->cantidadEnInventario = $_POST["cantidadEnInventario"] - $_POST["cantidadProducto"];
    $compra->cantidadProducto = $_POST["cantidadProducto"];
    $compra->productoId = $_POST["productoId"];
    $compra->usuarioNumero = $_POST["usuarioId"];

    $impuesto = ($compra->precioBaseProducto * $compra->tasaImpuestosProducto)/100;
    $totalProducto = $compra->precioBaseProducto + $impuesto;

    $compra->totalCarrito = $totalProducto;
    $compra->carritoId = $_POST["carritoId"];
    $compra->fechaCompra = $_POST["fechaCompra"];
    $compra->totalCompra = $_POST["totalCompra"];

    
    

	if($compra->save() > 0)
	{
        
		header("location:indexCompra.php?accion=1");
         
	}
	else
	{
		header("location:indexCompra.php?accion=2");
	}

    if($compra->save() > 0)
	{
        
	$producto = new Producto();
    $productoId = $producto->find($id);
	$producto->id = $compra->productoId;
	$producto->nombre = $compra->nombreProducto;
	$producto->descripcion = $compra->descripcionProducto;
	$producto->precioBase = $compra->precioBaseProducto;
	$producto->tasaImpuestos = $compra->tasaImpuestosProducto;
	$producto->estado = $compra->estadoProducto;
	$producto->cantidadEnInventario = $compra->cantidadEnInventario;
        if($producto->updateCant() > 0)
	    {
            $producto->cantidadEnInventario = $compra->cantidadEnInventario;
	    }
    }
    
    
   
	
?>