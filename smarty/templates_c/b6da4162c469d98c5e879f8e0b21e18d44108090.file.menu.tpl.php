<?php /* Smarty version Smarty-3.1.5, created on 2011-11-29 17:36:23
         compiled from "templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:825182544ec59acb0ebaa2-89269485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6da4162c469d98c5e879f8e0b21e18d44108090' => 
    array (
      0 => 'templates/menu.tpl',
      1 => 1322609775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '825182544ec59acb0ebaa2-89269485',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ec59acb0edc2',
  'variables' => 
  array (
    'activo4' => 0,
    'activo5' => 0,
    'menu' => 0,
    'menuItem' => 0,
    'logged' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ec59acb0edc2')) {function content_4ec59acb0edc2($_smarty_tpl) {?><div id="menuPrincipal">
	<div>&nbsp;</div>
	<div class="submenuPrincipal <?php echo $_smarty_tpl->tpl_vars['activo4']->value;?>
">
		<a href="/">Inicio</a>
	</div>

	<div class="submenuPrincipal <?php echo $_smarty_tpl->tpl_vars['activo5']->value;?>
">
		<a href="/agregar-anuncio">Agregar anuncio</a>
	</div>
	
	<?php  $_smarty_tpl->tpl_vars['menuItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->key => $_smarty_tpl->tpl_vars['menuItem']->value){
$_smarty_tpl->tpl_vars['menuItem']->_loop = true;
?>
		<div class="submenuPrincipal<?php echo $_smarty_tpl->tpl_vars['menuItem']->value['activo'];?>
">
			<a href="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value['categoria'];?>
</a>
		</div>
	<?php } ?>
	
	<?php if ($_smarty_tpl->tpl_vars['logged']->value==1){?>
		<div class="submenuPrincipal">
			<a href="/logout.php">Salir</a>
		</div>
	<?php }?>
	<div>&nbsp;</div>
</div>
<?php }} ?>