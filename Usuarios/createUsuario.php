<?php
	session_start();
	if (isset($_SESSION["usuario"])) 
	{
		require_once "../Models/TipoUsuario.php";
		
		$tipoUsuario = new TipoUsuario();
		$listaTiposUsuario = $tipoUsuario->All();

		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/Usuarios/vCreateUsuario.php";
		require_once "../Views/Partials/vFooter.php";

	}
	else
	{
		header("location:../indexLogin.php");
	}
?>