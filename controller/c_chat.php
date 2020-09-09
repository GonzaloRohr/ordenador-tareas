<?php

	require_once("../model/operacionChat.php");

	$operadorChat= new operacionesChat();
	$resultadoChat= $operadorChat->getAllChat();

	require_once("../view/v_chat.php");
?>