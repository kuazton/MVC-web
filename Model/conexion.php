<?php
class conexion{
	public function get_conexion(){
		include ("datos.php");
		$conexion=new PDO($db, $us, $pas);
		return $conexion;
	}
}
?>