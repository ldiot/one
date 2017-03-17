<?php
/* Smarty version 3.1.30, created on 2017-03-17 03:11:08
  from "F:\software\self-web\www\smarty\test\tpl\datetime.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cb53cc7f9eb6_64233190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b33a24dcf7620fd9fac0222f440408461690cf4e' => 
    array (
      0 => 'F:\\software\\self-web\\www\\smarty\\test\\tpl\\datetime.tpl',
      1 => 1489720266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cb53cc7f9eb6_64233190 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_test')) require_once 'F:\\software\\self-web\\www\\smarty\\smarty\\plugins\\modifier.test.php';
echo smarty_modifier_test($_smarty_tpl->tpl_vars['time']->value,'Y-m-d H:i:s');
}
}
