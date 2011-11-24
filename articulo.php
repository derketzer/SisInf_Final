<?php
	if($_GET['url'] == ""){
		header("HTTP/1.0 404 Not Found");
		exit();
	}

	require('smarty/libs/Smarty.class.php');

	$smarty = new Smarty;

	$smarty->setTemplateDir('templates/');
	$smarty->setCompileDir('smarty/templates_c/');
	$smarty->setConfigDir('smarty/configs/');
	$smarty->setCacheDir('smarty/cache/');

	//$smarty->caching = true;
	//$smarty->cache_lifetime = 120;

	$smarty->assign("urlBase", "http://www.aplikt.com");

	$smarty->assign("title", "An&aacute;huac Comparte");
	$smarty->assign("name", "Tabl&oacute;n de Anuncios An&aacute;huac");

	$smarty->assign("estilos", array("articulo"));

	$DBuser = "ketzer_tablon";
	$DBpass = "Hv8hgTLatHCVGHMnZaWeefhjc";
	$DBname = "ketzer_tablon";
	$DBhost = "localhost";

	$prefijo = "ta1_";

	$mysqli = mysqli_init();
	$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 20);
	$mysqli->real_connect($DBhost, $DBuser, $DBpass, $DBname);
	if (mysqli_connect_errno()) {
		$mysqli->close();
		exit();
	}

	$url = "/articulo/".$_GET['url'];

	$consulta = $mysqli->query("
		SELECT
			c.usuario,
			b.categoria,
			a.titulo AS descripcion,
			d.url AS imagen
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

	$articuloDetalles = array();

	while($fila = $consulta->fetch_assoc()){
		$i = 0;

		foreach($fila as $col=>$val){
			if($col != "imagen"){
				$articuloDetalles[$i] = array();
				$articuloDetalles[$i]['titulo'] = ucfirst($col).":";
				$articuloDetalles[$i]['texto'] = utf8_encode($val);
				$i++;
			}else{
				$smarty->assign("imagen", $fila['imagen']);
			}
		}
	}

	$consulta->close();

	$smarty->assign("articuloDetalles", $articuloDetalles);

	$smarty->assign("articuloComentarios", array(array(), array()));

	$mysqli->close();

	$smarty->display('articulo.tpl');
?>
