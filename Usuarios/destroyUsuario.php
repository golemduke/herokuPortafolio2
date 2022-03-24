<?php  
	require_once "../models/Usuario.php";

	$usuario = new Usuario();
	$usuario->id=$_GET["id"];
	if ($usuario->delete()>0) {
	 		header("location:indexUsuario.php?accion=5");
	 } 
	 else{
	 		header("location:indexUsuario.php?accion=6");
	 }
?>