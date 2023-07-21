<?php
/* Smarty version 4.3.1, created on 2023-04-28 20:48:38
  from 'C:\xampp\htdocs\Ednaldo\tomdosom\templates\menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_644c15064fe0b7_83991072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee432817ef92b878998fe82a6170c618c0cbc7f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Ednaldo\\tomdosom\\templates\\menu.html',
      1 => 1682706568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644c15064fe0b7_83991072 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="menu.css">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoriaCat']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
    <a class="menulink" href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['linkcateg'];?>
.php"><?php echo $_smarty_tpl->tpl_vars['cat']->value['categoria'];?>
</a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
