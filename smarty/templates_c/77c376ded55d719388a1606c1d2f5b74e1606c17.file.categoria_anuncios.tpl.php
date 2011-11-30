<?php /* Smarty version Smarty-3.1.5, created on 2011-11-29 12:28:07
         compiled from "templates/categoria_anuncios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14065930054ed523dded86f6-19007220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77c376ded55d719388a1606c1d2f5b74e1606c17' => 
    array (
      0 => 'templates/categoria_anuncios.tpl',
      1 => 1322591281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14065930054ed523dded86f6-19007220',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ed523de08e9f',
  'variables' => 
  array (
    'categoria' => 0,
    'ofertas' => 0,
    'urlBase' => 0,
    'oferta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed523de08e9f')) {function content_4ed523de08e9f($_smarty_tpl) {?><div class="tituloIndex">
	Categoría <?php echo $_smarty_tpl->tpl_vars['categoria']->value;?>

</div>

<div>&nbsp;</div>

<div id="ofertas">
	<?php  $_smarty_tpl->tpl_vars['oferta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oferta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ofertas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
<?php }} ?>