<?php
	session_start();
	if (isset($_SESSION["usuario"])) 
	{
		require_once "../Models/Carrito.php";

		$id = $_GET["id"];
		$carrito = new Carrito();
		$carritoId = $carrito->find($id);

        $listaCarrito = $carrito->all();
        $compras = 0;
        foreach ($listaCarrito as $listaCompras){
            $compras = $listaCompras->totalProducto + $compras;
        }

        
        if($carritoId->cantidadEnInventario > 0){
            $estado = "Disponible";
        }
        else{
            $estado = "Agotado";
        }

        $usuarioNumero = $_SESSION["id"];

		date_default_timezone_set("America/Bogota");
		$fechaCompra = date( "Y/m/d" );


		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/Compras/vCreateCompra.php";
		require_once "../Views/Partials/vFooter.php";
	}
	else
	{
		header("location:../indexLogin.php");
	}
?>