<?php

	if($_GET['url'] == ""){
		header("HTTP/1.0 404 Not Found");
		exit();
	}

	require('inc/singleton.class.php');

	//$smarty->caching = true;
	//$smarty->cache_lifetime = 120;

	$tablon = CMS::getInstance();

	$tablon->assign("estilos", array("index", "anuncio"));
	
	$tablon->assign("urlBase", "http://www.aplikt.com");

	$tablon->assign("title", "An&aacute;huac Comparte");
	$tablon->assign("name", "Tabl&oacute;n de Anuncios An&aacute;huac");

	$prefijo = "ta1_";

	$url = "/categoria/".addslasheS($_GET['url']);
	
	$consulta = $tablon->query("
		SELECT
			a.titulo,
			a.url AS url_producto,
			b.url AS url_imagen,
			c.categoria,
			c.id_categoria
		FROM
			{$prefijo}anuncio AS a
		INNER JOIN
			{$prefijo}media AS b
		ON
			a.id_media_principal = b.id_media
		INNER JOIN
			{$prefijo}categoria AS c
		ON
			a.id_categoria = c.id_categoria
		WHERE
			c.url = '".$url."'
		LIMIT
			12
	");
	
	$ofertas = array();
	$i = 0;
	
	while($fila = $consulta->fetch_assoc()){
		$categoria = $fila['categoria'];
		$id_categoria = $fila['id_categoria'];
		
		$ofertas[$i] = array();
		$ofertas[$i]['imagen'] = $fila['url_imagen'];
		$ofertas[$i]['titulo'] = $fila['titulo'];
		$ofertas[$i]['url'] = $fila['url_producto'];

		$i++;
	}
	
	$tablon->menu($id_categoria);

	$tablon->assign("categoria", utf8_encode($categoria));
	$tablon->assign("ofertas", $ofertas);

	$consulta->close();
	
	$tablon->close();

	$tablon->display('categoria.tpl');
	
?>
