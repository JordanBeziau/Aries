<?php /* Smarty version Smarty-3.1.19, created on 2017-11-27 09:56:45
         compiled from "/Users/jordanbeziau/Documents/Cours/Aries/Prestashop/admin/themes/default/template/helpers/tree/tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3368108385a1bd34d0ab681-74387841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b23a96f25393dd7d616819ee7f65622fd873e08' => 
    array (
      0 => '/Users/jordanbeziau/Documents/Cours/Aries/Prestashop/admin/themes/default/template/helpers/tree/tree_node_folder.tpl',
      1 => 1504519062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3368108385a1bd34d0ab681-74387841',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a1bd34d0b3064_61935936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1bd34d0b3064_61935936')) {function content_5a1bd34d0b3064_61935936($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Users/jordanbeziau/Documents/Cours/Aries/Prestashop/tools/smarty/plugins/modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>