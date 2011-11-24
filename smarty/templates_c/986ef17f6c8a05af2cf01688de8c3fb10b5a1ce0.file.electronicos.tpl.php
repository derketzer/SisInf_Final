<?php /* Smarty version Smarty-3.1.5, created on 2011-11-21 15:29:15
         compiled from "templates/electronicos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17140326044ecac195c9cc41-17850930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '986ef17f6c8a05af2cf01688de8c3fb10b5a1ce0' => 
    array (
      0 => 'templates/electronicos.tpl',
      1 => 1321910951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17140326044ecac195c9cc41-17850930',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ecac195d0756',
  'variables' => 
  array (
    'desc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ecac195d0756')) {function content_4ecac195d0756($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<img src="/img/tv.jpg" />

<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>