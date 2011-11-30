<?php
	require('inc/singleton.class.php');

	//$smarty->caching = true;
	//$smarty->cache_lifetime = 120;

	$tablon = CMS::getInstance();

	$tablon->assign("estilos", array("index"));

	$prefijo = "ta1_";

	$consulta = $tablon->query("
		SELECT
			a.titulo,
			a.url AS url_producto,
			b.url AS url_imagen
		FROM
			{$prefijo}anuncio AS a
		INNER JOIN
			{$prefijo}media AS b
		ON
			a.id_media_principal = b.id_media
		LIMIT
			3
	");

	$ofertas = array();
	$i = 0;

	while($fila = $consulta->fetch_assoc()){
		$ofertas[$i] = array();
		$ofertas[$i]['imagen'] = $fila['url_imagen'];
		$ofertas[$i]['titulo'] = $fila['titulo'];
		$ofertas[$i]['url'] = $fila['url_producto'];

		$i++;
	}

	$tablon->assign("activo4", "activo");

	$tablon->assign("ofertasDestacadas", $ofertas);

	$tablon->assign("ofertasNuevas", $ofertas);

	$consulta->close();
	
	$tablon->close();

	$tablon->display('index.tpl');
?>
