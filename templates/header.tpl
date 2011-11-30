<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="content-language" content="es">

		<title>{$title} - {$name}</title>

		<!-- Se incluyen las libreri­as estandar necesarias -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js" type="text/javascript"></script>

		<script src="{$urlBase}/js/standard.js" type="text/javascript"></script>

		<!-- Variable que incluye las libreri­as extra -->
		{$scripts}

		{foreach from=$scripts item=script}
			<script src="{$urlBase}/js/{$script}.js" type="text/javascript"></script>
		{/foreach}

		<!-- Se incluyen los estilos basicos-->
		<link rel="stylesheet" type="text/css" href="{$urlBase}/css/standard.css" />

		<!-- Variable que incluye las libreri­as extra -->
		{foreach from=$estilos item=estilo}
			<link rel="stylesheet" type="text/css" href="{$urlBase}/css/{$estilo}.css" />
		{/foreach}

		<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	</head>

	<body>

		<div id="header">
			<div id="escuelaButton">An&aacute;huac Norte</div>
		</div>

		<div id="loginBox">
			<div id="loginDatos">
				<div>&nbsp;</div>

				<div id="loginDatosUsuario">
					Usuario:<br />
					<input type="text" name="user" id="loginInputUser" />
				</div>

				<div>&nbsp;</div>

				<div id="loginDatosPassword">
					Contrase&ntilde;a:<br />
					<input type="text" name="pass" id="loginInputPass" />
				</div>

				<div>&nbsp;</div>

				<div id="loginDatosRecordar">
					<input type="checkbox" /> Recordar mi password
				</div>

				<div style="height: 20px;">&nbsp;</div>

				<input type="button" id="loginSend" value="Ingresar" />
			</div>

			{if $logged == 0}
				<div id="loginButton">Ingresar</div>
			{else}
				<a href="/logout.php">
					<div id="logoutButton">Salir</div>
				</a>
			{/if}
		</div>

		<div id="menuEscuelas">
			<ul>
				{foreach from=$menuEscuelas item=menuItem}
					<li>{$menuItem.escuela}</li>
				{/foreach}
			</ul>
		</div>

		<a href="/">
			<div id="logoAnahuac"></div>
		</a>

		<div id="wrap">
