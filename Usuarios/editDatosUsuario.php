<?php
	session_start();
	if (isset($_SESSION["usuario"]))
	{ 
		require_once "../Models/Usuario.php";

		$id = $_GET["id"];
		$usuario = new Usuario();
		$usuarioId = $usuario->buscar($id);

	    require_once "../Views/partials/vHeaderAll.php";
	    require_once "../Views/Usuarios/vEditDatosUsuario.php";
	    require_once "../Views/partials/vFooter.php";
    }
    else
	{
		header("location:../indexLogin.php");
	}
?>