<?php
	require_once "../Models/Usuario.php";

	$usuario = new Usuario();
	$usuario->cedula = $_POST["cedula"];
	$usuario->nombre = $_POST["nombre"];
	$usuario->apellido = $_POST["apellido"];
	$usuario->telefono = $_POST["telefono"];
	$usuario->contrasena = $_POST["contrasena"];
	$usuario->usuario = $_POST["usuario"];
	$usuario->tipo = $_POST["tipo"];

	if($usuario->save() > 0) 
	{
		header("location:indexUsuario.php?accion=1");
	}
	else
	{
		header("location:indexUsuario.php?accion=2");
	}
?>