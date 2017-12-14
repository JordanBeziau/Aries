<?php /* Smarty version Smarty-3.1.19, created on 2017-11-27 09:56:44
         compiled from "/Users/jordanbeziau/Documents/Cours/Aries/Prestashop/admin/themes/default/template/helpers/list/list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19085319765a1bd34c66bfb4-89283607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b249f5573d75c3cab4b1ddb1562d8f14c261082' => 
    array (
      0 => '/Users/jordanbeziau/Documents/Cours/Aries/Prestashop/admin/themes/default/template/helpers/list/list_action_addstock.tpl',
      1 => 1504519062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19085319765a1bd34c66bfb4-89283607',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a1bd34c673e47_67496395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1bd34c673e47_67496395')) {function content_5a1bd34c673e47_67496395($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-circle-arrow-up"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
