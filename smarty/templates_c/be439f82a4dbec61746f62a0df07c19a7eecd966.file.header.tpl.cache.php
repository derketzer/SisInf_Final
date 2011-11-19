<?php /* Smarty version Smarty-3.1.5, created on 2011-11-16 20:07:30
         compiled from "templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1790030804ec4687fb540c2-36274453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be439f82a4dbec61746f62a0df07c19a7eecd966' => 
    array (
      0 => 'templates/header.tpl',
      1 => 1321495487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1790030804ec4687fb540c2-36274453',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ec4687fb75d3',
  'variables' => 
  array (
    'title' => 0,
    'Name' => 1,
    'urlBase' => 0,
    'scripts' => 0,
    'estilos' => 0,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec4687fb75d3')) {function content_4ec4687fb75d3($_smarty_tpl) {?><html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="content-language" content="es">

		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo '/*%%SmartyNocache:1790030804ec4687fb540c2-36274453%%*/<?php echo $_smarty_tpl->tpl_vars[\'Name\']->value;?>
/*/%%SmartyNocache:1790030804ec4687fb540c2-36274453%%*/';?>
</title>

		<!-- Se incluyen las librerías estandar necesarias -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js" type="text/javascript"></script>

		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['urlBase']->value;?>
/js/standard.js" />

		<!-- Variable que incluye las librerías extra -->
		<?php echo $_smarty_tpl->tpl_vars['scripts']->value;?>


		<!-- Se incluyen los estilos básicos-->
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['urlBase']->value;?>
/css/standard.css" />

		<!-- Variable que incluye las librerías extra -->
		<?php echo $_smarty_tpl->tpl_vars['estilos']->value;?>

	</head>

	<body><?php }} ?>