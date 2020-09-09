<?php 

class operacionesChat{

	public function __construct(){
		require_once("conexion-db.php");
		$this->conn= conexiondb::conectar();
	}

	public function getAllChat(){
		$resultado=$this->conn->query("SELECT * FROM chat");
		return $resultado;
	}

	public function insertChat($nombre,$mensaje){
		$resultado=$this->conn->prepare("INSERT INTO chat (nombre, mensaje) VALUES (?,?) ");
		$resultado->bind_Param("ss",$nombre,$mensaje);
		$resultado->execute();
		$resultado->close();
	}


}

?>