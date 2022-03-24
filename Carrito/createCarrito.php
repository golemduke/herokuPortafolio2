<?php
	session_start();
	if (isset($_SESSION["usuario"])) 
	{
		require_once "../Models/Producto.php";
        require_once "../Models/Usuario.php";

		$id = $_GET["id"];
		$producto = new Producto();
		$productoId = $producto->find($id);

        $impuesto = ($productoId->precioBase * $productoId->tasaImpuestos)/100;
        $totalProducto = $productoId->precioBase + $impuesto;

        if($productoId->cantidadEnInventario > 0){
            $estado = "Disponible";
        }
        else{
            $estado = "Agotado";
        }

        $idUsuario = $_SESSION["id"];
        


		date_default_timezone_set("America/Bogota");
		$fecha = date( "Y/m/d" );

		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/Carrito/vCreateCarrito.php";
		require_once "../Views/Partials/vFooter.php";
	}
	else
	{
		header("location:../indexLogin.php");
	}
?>