<?php /* Smarty version Smarty-3.1.5, created on 2011-11-16 21:00:27
         compiled from "templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10247272374ec46cbe58afa1-40105619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be439f82a4dbec61746f62a0df07c19a7eecd966' => 
    array (
      0 => 'templates/header.tpl',
      1 => 1321498764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10247272374ec46cbe58afa1-40105619',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ec46cbe5c73e',
  'variables' => 
  array (
    'title' => 0,
    'Name' => 0,
    'urlBase' => 0,
    'scripts' => 0,
    'estilos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec46cbe5c73e')) {function content_4ec46cbe5c73e($_smarty_tpl) {?><html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="content-language" content="es">

		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</title>

		<!-- Se incluyen las librerías estandar necesarias -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js" type="text/javascript"></script>

		<script src="<?php echo $_smarty_tpl->tpl_vars['urlBase']->value;?>
/js/standard.js" type="text/javascript"></script>

		<!-- Variable que incluye las librerías extra -->
		<?php echo $_smarty_tpl->tpl_vars['scripts']->value;?>


		<!-- Se incluyen los estilos básicos-->
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['urlBase']->value;?>
/css/standard.css" />

		<!-- Variable que incluye las librerías extra -->
		<?php echo $_smarty_tpl->tpl_vars['estilos']->value;?>

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

		<div id="wrap"><?php }} ?>