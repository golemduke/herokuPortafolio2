<?php
	session_start();
	if (isset($_SESSION["usuario"]))
	{ 
		require_once "../Models/Carrito.php";

		$id = $_GET["id"];
		$carrito = new Carrito();
		$carritoId = $carrito->find($id);


	    require_once "../Views/partials/vHeaderAll.php";
	    require_once "../Views/Carrito/vEditCarrito.php";
	    require_once "../Views/partials/vFooter.php";
    }
    else
	{
		header("location:../indexLogin.php");
    }