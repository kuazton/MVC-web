<?php
class Mmen{
//Atributos	
	private $idpag;
	private $idper;
    private $nompag;
    private $rutpag;
	private $icopag;

// Metodos GET devuelven el dato
	function getidpag(){return $this->idpag;}
    function getIdper(){return $this->idper;}
    function getPag(){return $this->nompag;}
    function getRut(){return $this->rutpag;}
    function getIco(){return $this->icopag;}

// Metodos SET guardar el dato
    function setidpag($idpag){$this->idpag=$idpag;}
    function setIdper($idper){$this->idper=$idper;}
    function setPag($nompag){$this->nompag=$nompag;}
    function setRut($rutpag){$this->rutpag=$rutpag;}
    function setIco($icopag){$this->icopag=$icopag;}

	
	public function getMen(){
		$sql = "SELECT p.idpag, p.nompag, p.rutpag, p.icopag 
		FROM pagina AS p ORDER BY p.idpag;";
		$modelo = new conexion();
		$conexion = $modelo->get_conexion();
		$result = $conexion->prepare($sql);
		$result->execute();
		$res = $result->fetchall(PDO::FETCH_ASSOC);
		return $res;
	}

	public function getVal(){
		$sql = "SELECT p.idpag, p.nompag, p.rutpag, p.icopag 
		FROM pagina AS p 
		WHERE p.idpag=:idpag";
		$modelo = new conexion();
		$conexion = $modelo->get_conexion();
		$result = $conexion->prepare($sql);
		$idpag = $this->getidpag();
		$result->bindParam(':idpag',$idpag);
		$result->execute();
		$res = $result->fetchall(PDO::FETCH_ASSOC);
		return $res;
	}
}
?>