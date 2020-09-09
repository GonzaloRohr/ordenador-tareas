<?php 
	
	if(isset($_POST['enviar'])){

		$nombre=htmlentities(addslashes($_POST['nombre']));
		$mensaje=htmlentities(addslashes($_POST['mensaje']));

		require("../model/operacionChat.php");

		$operador=new operacionesChat();

		$operador->insertChat($nombre,$mensaje);

		HEADER("Location:../index.php");
	}

?>