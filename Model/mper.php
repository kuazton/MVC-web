<?php 

class Mper {

    private $nombre;
    private $apellido;
    private $correo;
    private $sexo;

    function getNom(){
        $this->nombre;
    }
    function getApe(){
        $this->apellido;
    }
    function getCorr(){
        $this->correo;
    }
    function getSex(){
        $this->sexo;
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
        try{
            $sql = "INSERT INTO usuario (idemp, nombre, apellido, correo, sexo) VALUES (:idemp, :nombre, :apellido, :correo, :sexo)";
            $modelo = new conexion();
            $conexion = $modelo->get_conexion();
            $result = $conexion->prepare($sql);
            $nomtpr = $this->getNomtpr();
            $result->bindParam(":nomtpr",$nomtpr);
            $deptpr = $this->getDeptpr();
            $result->bindParam(":deptpr",$deptpr);
            $acttpr = $this->getActtpr();
            $result->bindParam(":acttpr",$acttpr);
            $result ->execute();
        }catch(Exception $e){
            ManejoError($e);
        }
    }





}




?>