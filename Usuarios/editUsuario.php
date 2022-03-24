<?php
	session_start();
	if (isset($_SESSION["usuario"]))
	{ 
		require_once "../Models/Usuario.php";
		require_once "../Models/TipoUsuario.php";

		$id = $_GET["id"];
		$usuario = new Usuario();
		$usuarioId = $usuario->find($id);
		
		$tipoUsuario = new TipoUsuario();
		$listaTipoUsuario = $tipoUsuario->all();

	    require_once "../Views/partials/vHeaderAll.php";
	    require_once "../Views/Usuarios/vEditUsuario.php";
	    require_once "../Views/partials/vFooter.php";
    }
    else
	{
		header("location:../indexLogin.php");
	}
?>