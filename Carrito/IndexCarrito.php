
<?php 
	session_start();
	if (isset($_SESSION["usuario"])) 
	{
		require_once "../Models/Carrito.php";
		
		$carrito = new Carrito();
		$listaCarrito = $carrito->all();

		

		if (isset($_GET["accion"])) 
		{
			switch ($_GET["accion"]) 
			{
				case '1':
					$mensaje = "El Producto se añadio correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '2':
					$mensaje = "El Producto no se añadio.";
					$clase = "alert alert-danger";
					break;
				case '3':
					$mensaje = "El Producto se actualizó correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '4':
					$mensaje = "El Producto no se actualizó.";
					$clase = "alert alert-danger";
					break;
				case '5':
					$mensaje = "El Carrito se eliminó correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '6':
					$mensaje = "El Carrito no se eliminó.";
					$clase = "alert alert-danger";
					break;
			}
		}

		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/Carrito/vIndexCarrito.php";
		require_once "../Views/Partials/vFooter.php";
	}
	else
	{
		header("location:../indexLogin.php");
	}
?>