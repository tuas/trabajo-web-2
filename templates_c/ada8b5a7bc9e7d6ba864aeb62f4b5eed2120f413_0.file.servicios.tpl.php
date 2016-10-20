<?php
/* Smarty version 3.1.30, created on 2016-10-20 04:23:58
  from "C:\xampp\htdocs\trabajo web\templates\servicios.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58082abeaa0d37_88232136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ada8b5a7bc9e7d6ba864aeb62f4b5eed2120f413' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo web\\templates\\servicios.tpl',
      1 => 1476930041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58082abeaa0d37_88232136 (Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Servicos recomendados</h2>
<table class="tablaservicio">
  <thead>
    <th>Servicio</th>
    <th>Ciudad</th>
    <th>Nombre</th>
    <th>Telefono</th>
    <th>Direccion</th>
  </thead>
  <tbody id="tabla">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servicos']->value, 'serv', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['serv']->value) {
?>
      <tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['serv']->value, 'elemento', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['elemento']->value) {
?>
         <td><span><?php echo $_smarty_tpl->tpl_vars['elemento']->value;?>
</span></td>
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
