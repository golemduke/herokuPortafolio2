<?php
	session_start();

	if (isset($_SESSION["usuario"]))
	{ 
		require_once "../Models/Usuario.php";
		require_once "../Models/Producto.php";

		require_once "../Models/Carrito.php";
		
		$carrito = new Carrito();
		$listaCarrito = $carrito->all();
		
		$id = $_SESSION['id'];
		$usuario = new Usuario();
		//$mostrarProductos = $usuario->mostrar_productos($id);

		$producto = new Producto();
		$listaProductos = $producto->all();

		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/Home/vIndexHome.php";
		require_once "../Views/Partials/vFooter.php";

	}
	else
	{
		header("location:../indexLogin.php");
	}	
?>