

<?php 
	session_start();
	if (isset($_SESSION["usuario"])) 
	{
		require_once "../Models/Producto.php";
		
		$producto = new Producto();
		$listaProductos = $producto->all();

		

		if (isset($_GET["accion"])) 
		{
			switch ($_GET["accion"]) 
			{
				case '1':
					$mensaje = "El Producto se creó correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '2':
					$mensaje = "El Producto no se creó.";
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
					$mensaje = "El Producto se eliminó correctamente.";
					$clase = "alert alert-success";
					break;
				
				case '6':
					$mensaje = "El Producto no se eliminó.";
					$clase = "alert alert-danger";
					break;
			}
		}

		require_once "../Views/Partials/vHeaderAll.php";
		require_once "../Views/Productos/vIndexProducto.php";
		require_once "../Views/Partials/vFooter.php";
	}
	else
	{
		header("location:../indexLogin.php");
	}
?>