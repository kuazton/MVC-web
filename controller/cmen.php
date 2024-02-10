<?php
include ('model/mmen.php');

$mmen = new Mmen();
$dat = $mmen->getMen();

function validar($pagid){
	$mmen = new Mmen();
	$mmen->setidpag($pagid);
	$dat = $mmen->getVal();
	return $dat;
}

?>