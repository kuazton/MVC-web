<?php 
include('model/mper.php');

$mper = new Mper();

$idusu = isset($_REQUEST['idusu']) ? $_REQUEST['idusu']:NULL;
$nombre = isset($_POST['nombre']) ? $_POST['nombre']:NULL;
$apellido = isset($_POST['apellido']) ? $_POST['apellido']:NULL;
$correo = isset($_POST['correo']) ? $_POST['correo']:NULL;
$sexo = isset($_POST['sexo']) ? $_POST['sexo']:NULL;

$ope = isset($_REQUEST['ope']) ? $_REQUEST['ope']:NULL;
$datOne = NULL;

$mper->setNom($nombre);
$mper->setApe($apellido);
$mper->setCorr($correo);
$mper->setSex($sexo);

$mper->save();
?>