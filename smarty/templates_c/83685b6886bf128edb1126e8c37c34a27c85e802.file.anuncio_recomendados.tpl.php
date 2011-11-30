<?php /* Smarty version Smarty-3.1.5, created on 2011-11-29 14:46:35
         compiled from "templates/anuncio_recomendados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9536917074ed5418d2eb3f8-20685469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83685b6886bf128edb1126e8c37c34a27c85e802' => 
    array (
      0 => 'templates/anuncio_recomendados.tpl',
      1 => 1322599594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9536917074ed5418d2eb3f8-20685469',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ed5418d2ed55',
  'variables' => 
  array (
    'recomendados' => 0,
    'recomendado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed5418d2ed55')) {function content_4ed5418d2ed55($_smarty_tpl) {?><h2>Anuncios recomendados</h2>

<?php  $_smarty_tpl->tpl_vars['recomendado'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recomendado']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recomendados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recomendado']->key => $_smarty_tpl->tpl_vars['recomendado']->value){
$_smarty_tpl->tpl_vars['recomendado']->_loop = true;
?>
	<div class="recomendado">
		<a href="<?php echo $_smarty_tpl->tpl_vars['recomendado']->value['url'];?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['recomendado']->value['imagen'];?>
" class="recomendadoImagen" />
		</a>
	</div>
<?php } ?><?php }} ?>