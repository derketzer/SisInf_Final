<?php

	if($_POST['id_anuncio'] == "" || $_POST['comentario'] == ""){
		header("HTTP/1.0 404 Not Found");
		exit();
	}

	require('../inc/singleton.class.php');

	$tablon = CMS::getInstance();

	$tablon->assign("urlBase", "http://www.aplikt.com");

	$tablon->assign("title", "An&aacute;huac Comparte");
	$tablon->assign("name", "Tabl&oacute;n de Anuncios An&aacute;huac");

	$prefijo = "ta1_";

	$res = array();
	$res['error'] = "";

	$id_anuncio = $_POST['id_anuncio'];
	$comentario = $_POST['comentario'];
	$id_usuario = $_SESSION['id_usuario']?$_SESSION['id_usuario']:1;

	$query_string = "
		INSERT INTO
			{$prefijo}comentario
		(id_comentario,
			id_usuario,
			id_anuncio,
			comentario,
			fecha)
		VALUES(NULL,
			$id_usuario,
			$id_anuncio,
			'".addslashes($comentario)."',
			NOW()
		)
	";

	if(!$tablon->query($query_string)){
		$res['error'] = "No se pudo guardar correctamente";
	}

	$tablon->close();

	echo json_encode($res);

?>