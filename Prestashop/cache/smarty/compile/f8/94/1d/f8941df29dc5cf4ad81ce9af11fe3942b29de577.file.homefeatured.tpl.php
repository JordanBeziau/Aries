<?php /* Smarty version Smarty-3.1.19, created on 2017-11-27 09:56:42
         compiled from "/Users/jordanbeziau/Documents/Cours/Aries/Prestashop/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12978163185a1bd34ad56270-91528617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8941df29dc5cf4ad81ce9af11fe3942b29de577' => 
    array (
      0 => '/Users/jordanbeziau/Documents/Cours/Aries/Prestashop/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl',
      1 => 1504519062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12978163185a1bd34ad56270-91528617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a1bd34ad60cd6_57801174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1bd34ad60cd6_57801174')) {function content_5a1bd34ad60cd6_57801174($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>