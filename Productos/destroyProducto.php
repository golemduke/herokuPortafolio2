<?php  
	require_once "../models/Producto.php";

	$producto = new Producto();
	$producto->id=$_GET["id"];
	if ($producto->delete()>0) {
	 		header("location:indexProducto.php?accion=5");
	 } 
	 else{
	 		header("location:indexProducto.php?accion=6");
	 }
?>