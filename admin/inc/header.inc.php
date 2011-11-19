<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<title>Tablón Anáhuac CMS</title>	
		<meta name="description" content="" />

		<meta name="keywords" content="" />

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js" type="text/javascript"></script>
		<script src="/admin/inc/tiny_mce/tiny_mce.js" type="text/javascript"></script>
		<script src="/js/pirobox.min.js" type="text/javascript"></script>
		<script src="/admin/js/standard.js" type="text/javascript"></script>
		
		<link rel="stylesheet" type="text/css" href="/css/pirobox/style.css"/>
		<link rel="stylesheet" type="text/css" href="/admin/css/standard.css" />
		
		<?php
		 	$singleton = CMS::getInstance();
			echo $singleton->loadCSS("standard");
		?>
	</head>
	
	<body>
	
		<div id="header">
			<div id="migajas">Tablón Anáhuac > Anuncio > Nuevo Anuncio</div>
		</div>
		
		<div style="height:30px;clear:both;"></div>
		
		<div id="content">