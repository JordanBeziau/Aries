<?php /* Smarty version Smarty-3.1.19, created on 2017-11-27 09:56:45
         compiled from "/Users/jordanbeziau/Documents/Cours/Aries/Prestashop/admin/themes/default/template/helpers/tree/tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7763504715a1bd34d117b91-68073232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '740fb16dd9b8d1c13c41802a2ed3ddadc1786ad2' => 
    array (
      0 => '/Users/jordanbeziau/Documents/Cours/Aries/Prestashop/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1504519062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7763504715a1bd34d117b91-68073232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a1bd34d11baa6_06146262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1bd34d11baa6_06146262')) {function content_5a1bd34d11baa6_06146262($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
