<?php  
	require_once "../Models/Usuario.php";

	$usuarios = new Usuario(); 
	$usuarios->id=$_POST["id"];
	$usuarios->cedula=$_POST["cedula"];
	$usuarios->nombre=$_POST["nombre"];
	$usuarios->apellido=$_POST["apellido"];
	$usuarios->telefono=$_POST["telefono"];
	$usuarios->contrasena=$_POST["contrasena"];
	$usuarios->tipo=$_POST["tipo"];
	$usuarios->usuario=$_POST["usuario"];	

	if ($usuarios->update()>0) {
	 		header("location:indexUsuario.php?accion=3");
	 } 
	 else{
	 		header("location:indexUsuario.php?accion=4");
	 }
?>