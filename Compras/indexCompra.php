<?php 
	session_start();
	if (isset($_SESSION["usuario"])) 
	{
		require_once "../Models/Compra.php";
		
		$compra = new Compra();
		$listaCompra = $compra->all();
        //$fecha1 =$_POST["fecha1"];
        //$fecha2 =$_POST["fecha2"];
        //$buscarCompra = $compra->buscar($fecha1, $fecha2);
		

		if (isset($_GET["accion"])) 
		{
			switch ($_GET["accion"]) 
			{
				case '1':
					$mensaje = "Compra realizada correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '2':
					$mensaje = "La Compra no fue realizada.";
					$clase = "alert alert-danger";
					break;
				case '3':
					$mensaje = "La Compra se actualizó correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '4':
					$mensaje = "El Compra no se actualizó.";
					$clase = "alert alert-danger";
					break;
				case '5':
					$mensaje = "El Compra se eliminó correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '6':
					$mensaje = "El Compra no se eliminó.";
					$clase = "alert alert-danger";
					break;
			}
		}

		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/Compras/vIndexCompra.php";
		require_once "../Views/Partials/vFooter.php";
	}
	else
	{
		header("location:../indexLogin.php");
	}