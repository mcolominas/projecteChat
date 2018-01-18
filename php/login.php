<?php
	require "funcionesGenerales.php";
	if(isset($_POST['username']) && isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "admin" && $password == "admin"){
			$_SESSION['usuario'] = [
				"usuario" => "admin",
				"nombre" => "pedro",
				"apellidos" => "gonzalez",
				"email" => "admin@prueba.com"];
			header("Location: ../index.php");
		}else{
			echo "usuario no existe";	
		}
	}

?>