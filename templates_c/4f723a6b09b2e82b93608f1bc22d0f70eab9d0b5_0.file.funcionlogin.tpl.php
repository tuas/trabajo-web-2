<?php
/* Smarty version 3.1.30, created on 2016-10-28 01:10:08
  from "C:\xampp\htdocs\web\templates\funcionlogin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581289508c8d64_97355305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f723a6b09b2e82b93608f1bc22d0f70eab9d0b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\funcionlogin.tpl',
      1 => 1477609703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581289508c8d64_97355305 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p>
  Bienvenido
</p>

<div>
    <h2>Tabla de turnos</h2>
    <table class="selecturno">
      <thead>
        <th>ID</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Id servicio</th>
        <th>Edit</th>
        <th>Eliminar</th>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['turno']->value, 'horarios', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['horarios']->value) {
?>
          <tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['horarios']->value, 'cliente', false, 'h');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['h']->value => $_smarty_tpl->tpl_vars['cliente']->value) {
?>
              <td>
                <span><?php echo $_smarty_tpl->tpl_vars['cliente']->value;?>
</span>
              </td>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            <td><a href="#" id="formularioeturnotabla" data-idturno="<?php echo $_smarty_tpl->tpl_vars['horarios']->value['id_turno'];?>
"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></td>
            <td><a href="#" id="eliminarturnotabla" data-idturno="<?php echo $_smarty_tpl->tpl_vars['horarios']->value['id_turno'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
          </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <tr>
          <td><a href="#" id="formularioturnotabla"><span class="glyphicon glyphicon-open" aria-hidden="true"> agregar</span></a></td>
        </tr>
      </tbody>
    </table>
    <div id="modificacionturno"></div>
</div>

<div>
    <h2>Tabla de servicios</h2>
    <table class="selecturno">
      <thead>
        <th>ID</th>
        <th>Servicio</th>
        <th>Edit</th>
        <th>Eliminar</th>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['serv']->value, 'servicios', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['servicios']->value) {
?>
          <tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servicios']->value, 'servicio', false, 'h');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['h']->value => $_smarty_tpl->tpl_vars['servicio']->value) {
?>
              <td>
                <span><?php echo $_smarty_tpl->tpl_vars['servicio']->value;?>
</span>
              </td>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <td><a href="#" id="formularioeditarserviciotabla" data-idservicios="<?php echo $_smarty_tpl->tpl_vars['servicios']->value['id_servicio'];?>
"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></td>
            <td><a href="#" id="eliminarserviciotabla" data-idservicios="<?php echo $_smarty_tpl->tpl_vars['servicios']->value['id_servicio'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
          </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <tr>
          <td><a href="#" id="formularioserviciotabla"><span class="glyphicon glyphicon-open" aria-hidden="true"> agregar</span></a></td>
        </tr>
      </tbody>
    </table>
    <div id="modificacionservicio"></div>
</div>

<div>
    <h2>Tabla de recomendados</h2>
    <table class="selecturno">
      <thead>
        <th>ID</th>
        <th>Servicio</th>
        <th>Empresa</th>
        <th>Ciudad</th>
        <th>Direccion</th>
        <th>logo</th>
        <th>Edit</th>
        <th>Eliminar</th>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recomendado']->value, 'recomedados', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['recomedados']->value) {
?>
          <tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recomedados']->value, 'elemento', false, 'h');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['h']->value => $_smarty_tpl->tpl_vars['elemento']->value) {
?>
              <td>
                <span><?php echo $_smarty_tpl->tpl_vars['elemento']->value;?>
</span>
              </td>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <td><a href="#" id="formularioeditarrecomendadotabla" data-idrecomendados="<?php echo $_smarty_tpl->tpl_vars['recomedados']->value['id_recomendado'];?>
"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></td>
            <td><a href="#" id="eliminarrecomendadotabla" data-idrecomendados="<?php echo $_smarty_tpl->tpl_vars['recomedados']->value['id_recomendado'];?>
"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
          </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <tr>
          <td><a href="#" id="formulariorecomendadotabla"><span class="glyphicon glyphicon-open" aria-hidden="true"> agregar</span></a></td>
        </tr>
      </tbody>
    </table>
    <div id="modificacionrecomendados"></div>
</div>
<?php }
}
