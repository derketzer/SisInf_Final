<?php /* Smarty version Smarty-3.1.5, created on 2011-11-29 15:14:01
         compiled from "templates/anuncio_comentarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9454034864ecdac80cd8b40-07476068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd307466cb98b532d5d9d4deac6b636015027f56b' => 
    array (
      0 => 'templates/anuncio_comentarios.tpl',
      1 => 1322601235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9454034864ecdac80cd8b40-07476068',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ecdac80d0309',
  'variables' => 
  array (
    'logged' => 0,
    'anuncioComentarios' => 0,
    'anuncioComentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ecdac80d0309')) {function content_4ecdac80d0309($_smarty_tpl) {?><div id="comentariosHeader">
	<h2>Comentarios</h2>
	<?php if ($_smarty_tpl->tpl_vars['logged']->value==1){?>
		<h2 id="botonComentar">Comentar</h2>
	<?php }?>

	<div style="clear:both"></div>
</div>

<div id="cajaComentar">
	<div id="cajaComentarWrap">
		<textarea id="textComentario"></textarea>
		<br />
		<input type="button" value="Comentar" id="buttonComentar" />
	</div>
</div>

<br />

<div id="cajaComentarios">
<?php  $_smarty_tpl->tpl_vars['anuncioComentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['anuncioComentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['anuncioComentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['anuncioComentario']->key => $_smarty_tpl->tpl_vars['anuncioComentario']->value){
$_smarty_tpl->tpl_vars['anuncioComentario']->_loop = true;
?>
	<div class="anuncioComentario">
		<div class="anuncioComentarioTitulo">
			<div class="anuncioComentarioUsuario">
				<?php echo $_smarty_tpl->tpl_vars['anuncioComentario']->value['usuario'];?>

			</div>

			<div class="anuncioComentarioFecha">
				<?php echo $_smarty_tpl->tpl_vars['anuncioComentario']->value['fecha'];?>

			</div>
		</div>

		<div class="anuncioComentarioTexto">
			<div style="height:10px;">&nbsp;</div>
			<div class="anuncioComentarioTextoWrap">
				<?php echo $_smarty_tpl->tpl_vars['anuncioComentario']->value['comentario'];?>

			</div>
		</div>

		<div style="clear:both;height: 15px;">&nbsp;</div>
	</div>
<?php } ?>
</div><?php }} ?>