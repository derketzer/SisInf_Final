<?php /* Smarty version Smarty-3.1.5, created on 2011-11-29 15:28:13
         compiled from "templates/anuncio_descripcion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14440637244ecdac80c755f5-17639419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5a6f009fbe5e0b4cf49cd27cecd291225ee04d0' => 
    array (
      0 => 'templates/anuncio_descripcion.tpl',
      1 => 1322602069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14440637244ecdac80c755f5-17639419',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ecdac80cd538',
  'variables' => 
  array (
    'id_anuncio' => 0,
    'baseURL' => 0,
    'imagen' => 0,
    'anuncioDetalles' => 0,
    'anuncioDetalle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ecdac80cd538')) {function content_4ecdac80cd538($_smarty_tpl) {?><input type="hidden" name="id_anuncio" id="id_anuncio" value="<?php echo $_smarty_tpl->tpl_vars['id_anuncio']->value;?>
" />

<div id="anuncioTop">
	<div id="anuncioIzquierda">
		<div id="anuncioImagen">
			<img src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" />
		</div>

		<div id="anuncioImagenCarrousel">
		</div>
	</div>

	<div id="anuncioDerecha">
		<div id="anuncioDetalles">
			<?php  $_smarty_tpl->tpl_vars['anuncioDetalle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['anuncioDetalle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['anuncioDetalles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['anuncioDetalle']->key => $_smarty_tpl->tpl_vars['anuncioDetalle']->value){
$_smarty_tpl->tpl_vars['anuncioDetalle']->_loop = true;
?>
				<div class="anuncioDetalle">
					<div class="anuncioDetalleTitulo">
						<?php echo $_smarty_tpl->tpl_vars['anuncioDetalle']->value['titulo'];?>

					</div>

					<div class="anuncioDetalleTexto">
						<?php echo $_smarty_tpl->tpl_vars['anuncioDetalle']->value['texto'];?>

					</div>
				</div>
			<?php } ?>
		</div>

		<div style="clear:both"></div>
	</div>

	<div style="clear:both;height:30px;"></div>
</div>

<div id="anuncioBottom">
	<div id="anuncioComentarios">
		<?php echo $_smarty_tpl->getSubTemplate ("anuncio_comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>

	<div id="anuncioAlgo">
		<?php echo $_smarty_tpl->getSubTemplate ("anuncio_recomendados.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>

	<div style="clear:both"></div>
</div><?php }} ?>