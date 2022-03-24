<?php  
	require_once "../Models/Usuario.php";

	$usuarios = new Usuario();
	$usuarios->id=$_POST["id"];
	$usuarios->contrasena=$_POST["contrasena"];
	$usuarios->usuario=$_POST["usuario"];	

	if ($usuarios->update_login() > 0) 
	{
 		header("location:indexUsuario.php?accion=7");
	} 
	 else
	{
 		header("location:indexUsuario.php?accion=8");
	}
?>