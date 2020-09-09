<?php 
	
	if(isset($_GET['id'])){

		$id=$_GET['id'];

		require_once('../model/operaciones.php');

		$operaciones= new operacionesTareas();
		$operaciones->deleteTarea($id);

		HEADER("Location:../index.php");

	}
	

?>