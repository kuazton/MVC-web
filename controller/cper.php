<?php 
include("models/mtpa.php");

$mtpr = new Mtpr();

$nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre']:NULL;
$apellido = isset($_POST['apellido']) ? $_POST['apellido']:NULL;
$correo = isset($_POST['correo']) ? $_POST['correo']:NULL;
$acttpr = isset($_POST['acttpr']) ? $_POST['acttpr']:NULL;

$ope = isset($_REQUEST['ope']) ? $_REQUEST['ope']:NULL;
$datOne = NULL;

$mtpr->setNom($nombre);

if($ope=="save"){
	$mtpr->setApe($nomtpr);
	$mtpr->setDeptpr($deptpr);
	$mtpr->setActtpr($acttpr);
	if(!$idtpr) $mtpr->save(); else $mtpr->edit();//!= si la variable esta vacia guarda sino edita
}

if($ope=="eli" && $idtpr) $mtpr->del();

if($ope=="edi" && $idtpr) $datOne = $mtpr->getOne();

$datAll = $mtpr->getAll();
$datTpr = $mtpr->getDet();
$datGraf = $mtpr->getGraf();
$datPdf = $mtpr->getAllPDF();
?>