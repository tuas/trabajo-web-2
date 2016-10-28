<?php
/* Smarty version 3.1.30, created on 2016-10-28 01:10:13
  from "C:\xampp\htdocs\web\templates\servicios.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5812895580e717_40312526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54fe11fd46431d1b65866bf8f6a1cf2dc76140b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\servicios.tpl',
      1 => 1477609405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5812895580e717_40312526 (Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Servicios recomendados</h2>
<table class="tablaservicio">
  <thead>
    <th>Identificacion de servicio</th>
    <th>Servicio</th>
    <th>Empreza</th>
    <th>Ciudad</th>
    <th>Direccion</th>
    <th>Logo</th>
  </thead>
  <tbody id="tabla">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servicios']->value, 'serv', false, 'filas');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filas']->value => $_smarty_tpl->tpl_vars['serv']->value) {
?>
    <tr>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['serv']->value, 'elemento', false, 'columnas');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['columnas']->value => $_smarty_tpl->tpl_vars['elemento']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['elemento']->value == $_smarty_tpl->tpl_vars['serv']->value['logo']) {?>
        <td><img src="<?php echo $_smarty_tpl->tpl_vars['elemento']->value;?>
" alt="logo" /></td>
      <?php } else { ?>
        <td><span><?php echo $_smarty_tpl->tpl_vars['elemento']->value;?>
</span></td>
      <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </tr>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </tbody>
</table>
<?php }
}
