<?php  
	require_once "../models/Carrito.php";

	$carrito = new Carrito();
	$carrito->id=$_GET["id"];
	if ($carrito->delete()>0) {
	 		header("location:indexCarrito.php?accion=5");
	 } 
	 else{
	 		header("location:indexCarrito.php?accion=6");
	 }
?>