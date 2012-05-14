<?php /* Smarty version Smarty-3.1.8, created on 2012-05-14 18:02:57
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16649105014fb0d80de74a69-35446778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '16649105014fb0d80de74a69-35446778',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fb0d80deff316_37815797',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fb0d80deff316_37815797')) {function content_4fb0d80deff316_37815797($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

Hello <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!
<?php echo $_smarty_tpl->getSubTemplate ("foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>