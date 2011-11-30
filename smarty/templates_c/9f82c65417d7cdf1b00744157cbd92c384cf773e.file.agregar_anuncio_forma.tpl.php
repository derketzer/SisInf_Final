<?php /* Smarty version Smarty-3.1.5, created on 2011-11-29 17:24:43
         compiled from "templates/agregar_anuncio_forma.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2123814814ed554c73d96f6-17407035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f82c65417d7cdf1b00744157cbd92c384cf773e' => 
    array (
      0 => 'templates/agregar_anuncio_forma.tpl',
      1 => 1322608254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2123814814ed554c73d96f6-17407035',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ed554c73db90',
  'variables' => 
  array (
    'categorias' => 0,
    'categoria' => 0,
    'escuelas' => 0,
    'escuela' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed554c73db90')) {function content_4ed554c73db90($_smarty_tpl) {?><h2>Agregar nuevo anuncio</h2>

<form method="POST" action="/agregar-anuncio" enctype="multipart/form-data">
	<div class="campoFila">
		<div class="campoTitulo">
			Categoria
		</div>
		<div class="campoCampo">
			<select name="id_categoria">
				<?php  $_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categoria']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->key => $_smarty_tpl->tpl_vars['categoria']->value){
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['categoria'];?>
</option>
				<?php } ?>
			</select>
		</div>
	</div>

	<div class="campoFila">
		<div class="campoTitulo">
			Escuela
		</div>
		<div class="campoCampo">
			<select name="id_escuela">
				<?php  $_smarty_tpl->tpl_vars['escuela'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['escuela']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['escuelas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['escuela']->key => $_smarty_tpl->tpl_vars['escuela']->value){
$_smarty_tpl->tpl_vars['escuela']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['escuela']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['escuela']->value['escuela'];?>
</option>
				<?php } ?>
			</select>
		</div>
	</div>

	<div class="campoFila">
		<div class="campoTitulo">
			Imagen
		</div>
		<div class="campoCampo">
			<input type="file" name="imagen" id="imagen" />
		</div>
	</div>

	<div class="campoFila">
		<div class="campoTitulo">
			Titulo
		</div>
		<div class="campoCampo">
			<input type="text" name="titulo" id="titulo" />
		</div>
	</div>

	<div class="campoFila">
		<div class="campoTitulo">
			Descripcion
		</div>
		<div class="campoCampo">
			<textarea name="descripcion" id="descripcion"></textarea>
		</div>
	</div>

	<div class="campoFila">
		<input type="submit" value="Anunciar" id="botonAnunciar" />
	</div>

	<input type="hidden" name="guardar" value="1" />
</form><?php }} ?>