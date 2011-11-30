<?php

	if($_GET['url'] == ""){
		header("HTTP/1.0 404 Not Found");
		exit();
	}

	require('inc/singleton.class.php');

	//$smarty->caching = true;
	//$smarty->cache_lifetime = 120;

	$tablon = CMS::getInstance();

	$tablon->assign("urlBase", "http://www.aplikt.com");

	$tablon->assign("title", "An&aacute;huac Comparte");
	$tablon->assign("name", "Tabl&oacute;n de Anuncios An&aacute;huac");

	$tablon->assign("estilos", array("anuncio"));

	$prefijo = "ta1_";

	$url = "/anuncio/".addslashes($_GET['url']);

	$consulta = $tablon->query("
		SELECT
			a.id_anuncio,
			c.usuario,
			b.categoria,
			a.descripcion,
			d.url AS imagen,
			b.id_categoria
		FROM
			{$prefijo}anuncio AS a
		INNER JOIN
			{$prefijo}categoria AS b
		ON
			a.id_categoria = b.id_categoria
		INNER JOIN
			{$prefijo}usuario AS c
		ON
			a.id_usuario = c.id_usuario
		INNER JOIN
			{$prefijo}media AS d
		ON
			a.id_media_principal = d.id_media
		WHERE
			a.url = '".$url."'
	");

	$anuncioDetalles = array();
	$id_anuncio = 0;
	$id_categoria = 0;

	while($fila = $consulta->fetch_assoc()){
		$i = 0;
		$id_anuncio = $fila['id_anuncio'];
		$id_categoria = $fila['id_categoria'];

		foreach($fila as $col=>$val){
			if($col != "imagen" && $col != "id_anuncio" && $col != "id_categoria"){
				$anuncioDetalles[$i] = array();
				$anuncioDetalles[$i]['titulo'] = ucfirst($col).":";
				$anuncioDetalles[$i]['texto'] = utf8_encode($val);
				$i++;
			}else{
				$tablon->assign("imagen", $fila['imagen']);
			}
		}
	}

	$tablon->menu($id_categoria);

	$consulta->close();

	$consulta = $tablon->query("
		SELECT
			a.id_comentario,
			a.comentario,
			DATE(a.fecha) AS fecha,
			b.usuario
		FROM
			{$prefijo}comentario AS a
		INNER JOIN
			{$prefijo}usuario AS b
		ON
			a.id_usuario = b.id_usuario
		WHERE
			a.id_anuncio = ".$id_anuncio."
		ORDER BY
			a.fecha DESC
		LIMIT
			10
	");

	$anuncioComentarios = array();

	while($fila = $consulta->fetch_assoc()){
		$date = new DateTime($fila['fecha']);
		$fila['fecha'] = $date->format('d \d\e F Y');
		$anuncioComentarios[] = $fila;
	}

	$consulta->close();

	$consulta = $tablon->query("
		SELECT
			a.id_anuncio,
			c.usuario,
			b.categoria,
			a.titulo AS descripcion,
			d.url AS imagen,
			b.id_categoria,
			a.url
		FROM
			{$prefijo}anuncio AS a
		INNER JOIN
			{$prefijo}categoria AS b
		ON
			a.id_categoria = b.id_categoria
		INNER JOIN
			{$prefijo}usuario AS c
		ON
			a.id_usuario = c.id_usuario
		INNER JOIN
			{$prefijo}media AS d
		ON
			a.id_media_principal = d.id_media
		WHERE
			a.id_anuncio != ".$id_anuncio."
		ORDER BY
			RAND()
	");

	$recomendados = array();

	while($fila = $consulta->fetch_assoc()){
		$recomendados[] = array("url"=>$fila['url'], "imagen"=>$fila['imagen']);
	}

	$consulta->close();

	$tablon->assign("logged", 1);

	$tablon->assign("recomendados", $recomendados);

	$tablon->assign("id_anuncio", $id_anuncio);

	$tablon->assign("anuncioDetalles", $anuncioDetalles);

	$tablon->assign("anuncioComentarios", $anuncioComentarios);

	$tablon->close();

	$tablon->display('anuncio.tpl');
?>
