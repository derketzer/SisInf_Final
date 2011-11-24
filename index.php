<?php
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

	$smarty->assign("estilos", array("index"));

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

	$consulta = $mysqli->query("
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

	$smarty->assign("ofertasDestacadas", $ofertas);

	$smarty->assign("ofertasNuevas", $ofertas);

	$consulta->close();

	$mysqli->close();

	$smarty->display('index.tpl');
?>
