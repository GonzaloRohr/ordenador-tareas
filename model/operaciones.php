<?php 
class operacionesTareas{

	private $conn;


	public function __construct(){

		require_once("conexion-db.php");
		$this->conn= conexiondb::conectar();
	}


	public function getAllTarea(){

		$retorno=$this->conn->query("SELECT * FROM tareas");

		return $retorno;
	}

	public function getTarea($id){
		$sql="SELECT * FROM tareas WHERE id=?";
		$retorno=$this->conn->prepare($sql);
		$retorno->bind_Param('i',$id);
		$retorno->execute();
		$resultado=$retorno->get_result();

		return $resultado;
	}

	public function insertTarea($titulo,$estado,$descripcion){

		$resultado=$this->
						conn->
						prepare("INSERT INTO tareas (titulo,estado,descripcion) VALUES (?,?,?)");

		$resultado->bind_Param("sss",$titulo,$estado,$descripcion);
		$resultado->execute();
	}

	public function setTarea($id,$titulo,$estado,$descripcion){
		$resultado=$this->
						conn->
						prepare("UPDATE tareas SET titulo=?, estado= ?, descripcion= ? WHERE id= ?");

		$resultado->bind_Param("sssi",$titulo,$estado,$descripcion,$id);
		$resultado->execute();
	}

	public function deleteTarea($id){
		$resultado=$this->conn->prepare("DELETE FROM tareas WHERE id=?");
		$resultado->bind_Param("i",$id);
		$resultado->execute();
	}


}

?>