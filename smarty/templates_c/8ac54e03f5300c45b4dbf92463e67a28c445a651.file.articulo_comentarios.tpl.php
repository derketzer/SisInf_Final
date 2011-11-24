<?php /* Smarty version Smarty-3.1.5, created on 2011-11-22 17:48:24
         compiled from "templates/articulo_comentarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17201203544ecc31005eddd8-91329838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ac54e03f5300c45b4dbf92463e67a28c445a651' => 
    array (
      0 => 'templates/articulo_comentarios.tpl',
      1 => 1322005704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17201203544ecc31005eddd8-91329838',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ecc31005eeed',
  'variables' => 
  array (
    'articuloComentarios' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ecc31005eeed')) {function content_4ecc31005eeed($_smarty_tpl) {?><h2>Comentarios</h2>

<?php  $_smarty_tpl->tpl_vars['articuloComentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['articuloComentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articuloComentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['articuloComentario']->key => $_smarty_tpl->tpl_vars['articuloComentario']->value){
$_smarty_tpl->tpl_vars['articuloComentario']->_loop = true;
?>
	<div class="articuloComentario">
		<div class="articuloComentarioTitulo">
			<div class="articuloComentarioUsuario">
				Der Ketzer
			</div>

			<div class="articuloComentarioFecha">
				14 de febrero 2011
			</div>
		</div>

		<div class="articuloComentarioTexto">
			<div style="height:10px;">&nbsp;</div>
			<div class="articuloComentarioTextoWrap">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
			</div>
		</div>

		<div style="clear:both;height: 15px;">&nbsp;</div>
	</div>
<?php } ?><?php }} ?>