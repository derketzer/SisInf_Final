<?php /* Smarty version Smarty-3.1.5, created on 2011-11-22 15:59:39
         compiled from "templates/index_productos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11207041854ecc0dc977c658-39580018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceb4f9a2cc6a5da07863942cbb0fbcd006a0a645' => 
    array (
      0 => 'templates/index_productos.tpl',
      1 => 1321999177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11207041854ecc0dc977c658-39580018',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ecc0dc97f738',
  'variables' => 
  array (
    'ofertasDestacadas' => 0,
    'urlBase' => 0,
    'oferta' => 0,
    'ofertasNuevas' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ecc0dc97f738')) {function content_4ecc0dc97f738($_smarty_tpl) {?><div class="tituloIndex">
	&iexcl;Ofertas Destacadas!
</div>

<div>&nbsp;</div>

<div id="ofertasDestacadas">
	<?php  $_smarty_tpl->tpl_vars['oferta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oferta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ofertasDestacadas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oferta']->key => $_smarty_tpl->tpl_vars['oferta']->value){
$_smarty_tpl->tpl_vars['oferta']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['urlBase']->value;?>
<?php echo $_smarty_tpl->tpl_vars['oferta']->value['url'];?>
" class="ofertaURL">
			<div class="ofertaItem">
				<div class="ofertaImagen">
					<img src="<?php echo $_smarty_tpl->tpl_vars['oferta']->value['imagen'];?>
" />
				</div>

				<div class="ofertaTitulo">
					<div class="ofertaTituloTexto">
						<?php echo $_smarty_tpl->tpl_vars['oferta']->value['titulo'];?>

					</div>
				</div>
			</div>
		</a>
	<?php } ?>

	<div style="clear:both;"></div>
</div>

<div style="height:50px;">&nbsp;</div>

<div class="tituloIndex">
	&iexcl;Ofertas Nuevas!
</div>

<div>&nbsp;</div>

<div id="ofertasNuevas">
	<?php  $_smarty_tpl->tpl_vars['oferta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oferta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ofertasNuevas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oferta']->key => $_smarty_tpl->tpl_vars['oferta']->value){
$_smarty_tpl->tpl_vars['oferta']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['urlBase']->value;?>
<?php echo $_smarty_tpl->tpl_vars['oferta']->value['url'];?>
" class="ofertaURL">
			<div class="ofertaItem">
				<div class="ofertaImagen">
					<img src="<?php echo $_smarty_tpl->tpl_vars['oferta']->value['imagen'];?>
" />
				</div>

				<div class="ofertaTitulo">
					<div class="ofertaTituloTexto">
						<?php echo $_smarty_tpl->tpl_vars['oferta']->value['titulo'];?>

					</div>
				</div>
			</div>
		</a>
	<?php } ?>

	<div style="clear:both;"></div>
</div><?php }} ?>