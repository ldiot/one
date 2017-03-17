<?php
/* Smarty version 3.1.30, created on 2017-03-17 03:34:26
  from "F:\software\self-web\www\smarty\test\tpl\content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cb5942b225d7_63143268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5226fd64133db9331c007a5e99bf26ec3eca78df' => 
    array (
      0 => 'F:\\software\\self-web\\www\\smarty\\test\\tpl\\content.tpl',
      1 => 1489721638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cb5942b225d7_63143268 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_test2')) require_once 'F:\\software\\self-web\\www\\smarty\\smarty\\plugins\\block.test2.php';
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('test2', array('replace'=>'true','maxnum'=>29));
$_block_repeat1=true;
echo smarty_block_test2(array('replace'=>'true','maxnum'=>29), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>

<?php echo $_smarty_tpl->tpl_vars['str']->value;?>

<?php $_block_repeat1=false;
echo smarty_block_test2(array('replace'=>'true','maxnum'=>29), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
