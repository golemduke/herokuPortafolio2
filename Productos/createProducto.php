<?php
	session_start();
	if (isset($_SESSION["usuario"])) 
	{
		require_once "../Models/Estado.php";

		$estado = new Estado();
		$listaEstados = $estado->All();

		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/Productos/vCreateProducto.php";
		require_once "../Views/Partials/vFooter.php";

	}
	else
	{
		header("location:../indexLogin.php");
	}
?>