<?php 

class conexiondb{

	public static function conectar(){
		$conn;

		$servidor="localhost";
		$usuario="root";
		$password="";
		$base_datos="ordenador_tareas";

		$conn= new mysqli($servidor,$usuario,$password,$base_datos);

		if ($conn->connect_error) {
  			die("Connection failed: " . $conn->connect_error);
		} 

		return $conn;
	}


}

?>