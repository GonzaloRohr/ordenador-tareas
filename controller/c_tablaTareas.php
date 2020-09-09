<?php 
	require("model/operaciones.php");

	$controladorTareas= new operacionesTareas();
	$tablaTarea=$controladorTareas->getAllTarea();

	require_once("view/v_tablaTareas.php");
?>