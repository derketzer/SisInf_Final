<?php /* Smarty version Smarty-3.1.5, created on 2011-11-29 17:49:26
         compiled from "templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10247272374ec46cbe58afa1-40105619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be439f82a4dbec61746f62a0df07c19a7eecd966' => 
    array (
      0 => 'templates/header.tpl',
      1 => 1322610566,
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
    'name' => 0,
    'urlBase' => 0,
    'scripts' => 0,
    'script' => 0,
    'estilos' => 0,
    'estilo' => 0,
    'logged' => 0,
    'menuEscuelas' => 0,
    'menuItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec46cbe5c73e')) {function content_4ec46cbe5c73e($_smarty_tpl) {?><html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="content-language" content="es">

		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</title>

		<!-- Se incluyen las libreri­as estandar necesarias -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js" type="text/javascript"></script>

		<script src="<?php echo $_smarty_tpl->tpl_vars['urlBase']->value;?>
/js/standard.js" type="text/javascript"></script>

		<!-- Variable que incluye las libreri­as extra -->
		<?php echo $_smarty_tpl->tpl_vars['scripts']->value;?>


		<?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['script']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
$_smarty_tpl->tpl_vars['script']->_loop = true;
?>
			<script src="<?php echo $_smarty_tpl->tpl_vars['urlBase']->value;?>
/js/<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
.js" type="text/javascript"></script>
		<?php } ?>

		<!-- Se incluyen los estilos basicos-->
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['urlBase']->value;?>
/css/standard.css" />

		<!-- Variable que incluye las libreri­as extra -->
		<?php  $_smarty_tpl->tpl_vars['estilo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['estilo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estilos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['estilo']->key => $_smarty_tpl->tpl_vars['estilo']->value){
$_smarty_tpl->tpl_vars['estilo']->_loop = true;
?>
			<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['urlBase']->value;?>
/css/<?php echo $_smarty_tpl->tpl_vars['estilo']->value;?>
.css" />
		<?php } ?>

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

			<?php if ($_smarty_tpl->tpl_vars['logged']->value==0){?>
				<div id="loginButton">Ingresar</div>
			<?php }else{ ?>
				<a href="/logout.php">
					<div id="logoutButton">Salir</div>
				</a>
			<?php }?>
		</div>

		<div id="menuEscuelas">
			<ul>
				<?php  $_smarty_tpl->tpl_vars['menuItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuEscuelas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->key => $_smarty_tpl->tpl_vars['menuItem']->value){
$_smarty_tpl->tpl_vars['menuItem']->_loop = true;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['menuItem']->value['escuela'];?>
</li>
				<?php } ?>
			</ul>
		</div>

		<a href="/">
			<div id="logoAnahuac"></div>
		</a>

		<div id="wrap">
<?php }} ?>