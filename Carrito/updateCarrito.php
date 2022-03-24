<?php
	require_once "../Models/Carrito.php";

	$carrito = new Carrito();
	$carrito->nombreProducto = $_POST["nombre"];
	$carrito->descripcionProducto = $_POST["descripcion"];
	$carrito->precioBaseProducto = $_POST["precioBase"];
	$carrito->tasaImpuestosProducto = $_POST["tasaImpuestos"];
    $carrito->estadoProducto = $_POST["estado"];
    $carrito->cantidadEnInventario = $_POST["cantidadEnInventario"];
    $carrito->cantidadProducto = $_POST["cantidadProducto"];
    $carrito->productoId = $_POST["productoId"];
    $carrito->usuarioId = $_POST["usuarioId"];
    $carrito->totalProducto = $_POST["totalProducto"];

	if($carrito->update() > 0)
	{
		header("location:indexCarrito.php?accion=1");
	}
	else
	{
		header("location:indexCarrito.php?accion=2");
	}
?>