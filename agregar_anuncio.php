<?php
	require('inc/singleton.class.php');

	//$smarty->caching = true;
	//$smarty->cache_lifetime = 120;

	$tablon = CMS::getInstance();

	$prefijo = "ta1_";

	if($_POST['guardar'] == 1){
		$id_categoria = $_POST['id_categoria'];

		if($_POST['id_categoria'] != ""){
			$id_escuela = $_POST['id_escuela'];

			if($_POST['id_escuela'] != ""){
				$titulo = $_POST['titulo'];

				if($_POST['titulo'] != ""){
					$descripcion = $_POST['descripcion'];

					if($_POST['descripcion'] != ""){

						$target_path = "/home/ketzer/public_html/aplikt.com/uploads/";
						$blu = explode(".", $_FILES['imagen']['name']);
						$ext = array_pop($blu);
						$tiempo = time().$ext;
						$target_path .= $tiempo;
						move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path);

						$tablon->query("INSERT INTO {$prefijo}media (id_media,url)VALUES(NULL,'/uploads/".$tiempo."')");

						$id_media = $tablon->insert_id();

						$url = "/anuncio/".$tablon->friendly_url($_POST['titulo']);

						$tablon->query("
							INSERT INTO
								{$prefijo}anuncio
							(
								id_anuncio,
								id_usuario,
								id_categoria,
								id_escuela,
								id_media_principal,
								titulo,
								descripcion,
								url,
								visible,
								fecha_alta,
								fecha_baja,
								fecha_modificacion
							)VALUES(
								NULL,
								1,
								".$id_categoria.",
								".$id_escuela.",
								".$id_media.",
								'".addslashes($titulo)."',
								'".addslashes($descripcion)."',
								'".$url."',
								1,
								NOW(),
								NOW(),
								NOW()
							)
						");

						header("location: ".$url);
					}
				}
			}
		}
	}

	$tablon->assign("estilos", array("index", "formulario"));

	$consulta = $tablon->query("
		SELECT
			id_categoria,
			categoria
		FROM
			{$prefijo}categoria
		ORDER BY
			categoria ASC
	");

	$categorias = array();

	while($fila = $consulta->fetch_assoc()){
		$categorias[] = array("id"=>$fila['id_categoria'],"categoria"=>utf8_encode($fila['categoria']));
	}

	$tablon->assign("categorias", $categorias);

	$tablon->assign("activo5", " activo");

	$consulta = $tablon->query("
		SELECT
			id_escuela,
			escuela
		FROM
			{$prefijo}escuela
		ORDER BY
			escuela ASC
	");

	$escuelas = array();

	while($fila = $consulta->fetch_assoc()){
		$escuelas[] = array("id"=>$fila['id_escuela'],"escuela"=>utf8_encode($fila['escuela']));
	}

	$tablon->assign("escuelas", $escuelas);

	$consulta->close();
	
	$tablon->close();

	$tablon->display('agregar_anuncio.tpl');
?>
