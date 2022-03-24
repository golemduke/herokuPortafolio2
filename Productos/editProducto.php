<?php
	session_start();
	if (isset($_SESSION["usuario"]))
	{ 
		require_once "../Models/Producto.php";
		require_once "../Models/Estado.php";

		$id = $_GET["id"];
		$producto = new Producto();
		$productoId = $producto->find($id);

		$estado = new Estado();
		$listaEstados  = $estado ->all();

	    require_once "../Views/partials/vHeaderAll.php";
	    require_once "../Views/Productos/vEditProducto.php";
	    require_once "../Views/partials/vFooter.php";
    }
    else
	{
		header("location:../indexLogin.php");
	}
?>