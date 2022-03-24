<?php
	require_once "../Models/Producto.php";

	$producto = new Producto();
	$producto->nombre = $_POST["nombre"];
	$producto->descripcion = $_POST["descripcion"];
	$producto->precioBase = $_POST["precioBase"];
	$producto->tasaImpuestos = $_POST["tasaImpuestos"];
    $producto->estado = $_POST["estado"];
	$producto->cantidadEnInventario = $_POST["cantidadEnInventario"];

	if($producto->save() > 0)
	{
		header("location:indexProducto.php?accion=1");
	}
	else
	{
		header("location:indexProducto.php?accion=2");
	}
?>