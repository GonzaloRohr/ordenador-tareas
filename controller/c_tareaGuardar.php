<?php 

	$titulo= htmlentities(addslashes($_POST['title']));
	$descripcion= htmlentities(addslashes($_POST['description']));
	$estado=htmlentities(addslashes($_POST['estade']));

	require_once("../model/operaciones.php");

	$operar= new operacionesTareas();
	$operar->insertTarea($titulo,$descripcion,$estado);

	HEADER("Location:../index.php");
?>