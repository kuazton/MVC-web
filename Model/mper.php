<?php 

class Mper {

    private $nombre;
    private $apellido;
    private $correo;
    private $sexo;

    function getNom(){
        return $this->nombre;
    }
    function getApe(){
        return $this->apellido;
    }
    function getCorr(){
        return $this->correo;
    }
    function getSex(){
        return $this->sexo;
    }
    function setNom($nombre){
        $this->nombre=$nombre;
    }
    function setApe($apellido){
        $this->apellido=$apellido;
    }
    function setCorr($correo){
        $this->correo=$correo;
    }
    function setSex($sexo){
        $this->sexo=$sexo;
    }

    function save(){
        $sql = "INSERT INTO usuario (nombre, apellido, correo, sexo) VALUES (:nombre, :apellido, :correo, :sexo)";
        $modelo = new conexion();
        $conexion = $modelo->get_conexion();
        $result = $conexion->prepare($sql);
        $nombre = $this->getNom();
        $result->bindParam(":nombre",$nombre);
        $apellido = $this->getApe();
        $result->bindParam(":apellido",$apellido);
        $correo = $this->getCorr();
        $result->bindParam(":correo",$correo);
        $sexo = $this->getSex();
        $result->bindParam(":sexo",$sexo);
        $result ->execute();
    }
}
?>