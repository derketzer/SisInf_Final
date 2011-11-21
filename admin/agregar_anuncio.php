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

	$singleton->loadModule("auth");

	$blu = $singleton->auth->hash("papamama121111");
	$bla = $singleton->auth->hash("papamama");

	print_r($blu);
	echo "<br />";
	print_r($bla);

	echo $singleton->auth->checkHash("papamama", $blu['salt_komplett'].$blu['hash']);
	echo $singleton->auth->checkHash("papamama", $bla['salt_komplett'].$blu['hash']);
	
	$singleton->forma->iniciaForma("agrega-anuncio");
	$singleton->forma->cierraForma();
	echo $singleton->forma->imprime();
?>

<?php
	$singleton->load("footer");
?>