<?php

	include_once($_SERVER['DOCUMENT_ROOT']."/admin/inc/cms.class.php");

	$singleton = CMS::getInstance();
	
	$singleton->load("header");
	
	//$singleton->loadCSS("anuncio");
?>

<h2>Agregar Anuncio</h2>
<br />

<?php
	$singleton->loadModule("forma");
	$singleton->loadModule("db");
	
	$singleton->forma->iniciaForma("agrega-anuncio");
	$singleton->forma->cierraForma();
	echo $singleton->forma->imprime();
?>

<?php
	$singleton->load("footer");
?>