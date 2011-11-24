<?php /* Smarty version Smarty-3.1.5, created on 2011-11-22 17:52:20
         compiled from "templates/articulo_descripcion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7144535884ecc1bb6754e32-68087027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4ee53f2a4024ee4afaebc330f5c13df213fb377' => 
    array (
      0 => 'templates/articulo_descripcion.tpl',
      1 => 1322005940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7144535884ecc1bb6754e32-68087027',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ecc1bb6757b4',
  'variables' => 
  array (
    'baseURL' => 0,
    'imagen' => 0,
    'articuloDetalles' => 0,
    'articuloDetalle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ecc1bb6757b4')) {function content_4ecc1bb6757b4($_smarty_tpl) {?><div id="articuloTop">
	<div id="articuloIzquierda">
		<div id="articuloImagen">
			<img src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
" />
		</div>

		<div id="articuloImagenCarrousel">
		</div>
	</div>

	<div id="articuloDerecha">
		<div id="articuloDetalles">
			<?php  $_smarty_tpl->tpl_vars['articuloDetalle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['articuloDetalle']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articuloDetalles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['articuloDetalle']->key => $_smarty_tpl->tpl_vars['articuloDetalle']->value){
$_smarty_tpl->tpl_vars['articuloDetalle']->_loop = true;
?>
				<div class="articuloDetalle">
					<div class="articuloDetalleTitulo">
						<?php echo $_smarty_tpl->tpl_vars['articuloDetalle']->value['titulo'];?>

					</div>

					<div class="articuloDetalleTexto">
						<?php echo $_smarty_tpl->tpl_vars['articuloDetalle']->value['texto'];?>

					</div>
				</div>
			<?php } ?>
		</div>

		<div style="clear:both"></div>
	</div>

	<div style="clear:both;height:30px;"></div>
</div>

<div id="articuloBottom">
	<div id="articuloComentarios">
		<?php echo $_smarty_tpl->getSubTemplate ("articulo_comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>

	<div id="articuloAlgo">
		<h2>Algo</h2>
	</div>

	<div style="clear:both"></div>
</div><?php }} ?>