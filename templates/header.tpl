<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="content-language" content="es">

		<title>{$title} - {$Name}</title>

		<!-- Se incluyen las librerías estandar necesarias -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js" type="text/javascript"></script>

		<script src="{$urlBase}/js/standard.js" type="text/javascript"></script>

		<!-- Variable que incluye las librerías extra -->
		{$scripts}

		<!-- Se incluyen los estilos básicos-->
		<link rel="stylesheet" type="text/css" href="{$urlBase}/css/standard.css" />

		<!-- Variable que incluye las librerías extra -->
		{$estilos}
	</head>

	<body>

		<div id="header">
			<div id="escuelaButton">Anáhuac Norte</div>
			<div id="loginButton">Ingresar</div>
		</div>

		<div id="menuEscuelas">
			<ul>
				<li>Anáhuac Norte</li>
				<li>Anáhuac Sur</li>
			</ul>
		</div>

		<div id="logoAnahuac"></div>

		<div id="wrap">