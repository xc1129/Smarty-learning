<?php /* Smarty version Smarty-3.1.8, created on 2012-05-14 18:26:29
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8831513064fb0ddd5143e23-41799042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1336989773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8831513064fb0ddd5143e23-41799042',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fb0ddd51795e8_81038216',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fb0ddd51795e8_81038216')) {function content_4fb0ddd51795e8_81038216($_smarty_tpl) {?><<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
>
Hello <<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
>!
<<?php echo $_smarty_tpl->getSubTemplate ("foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
>
<?php }} ?>