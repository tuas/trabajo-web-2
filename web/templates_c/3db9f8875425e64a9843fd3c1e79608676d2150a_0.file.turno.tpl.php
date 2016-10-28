<?php
/* Smarty version 3.1.30, created on 2016-10-28 01:10:16
  from "C:\xampp\htdocs\web\templates\turno.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58128958b919a5_01132052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3db9f8875425e64a9843fd3c1e79608676d2150a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\turno.tpl',
      1 => 1476932584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58128958b919a5_01132052 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="horaturno">
<h2>Pedidos de turnos</h2>
<form id='forulario' action="" method="post">
  <div class="form-group">
      <label class="control-label col-xs-3">Ingrese el dia para el turno:</label>
      <div class="col-xs-9">
          <input type="date" class="form-control" name="dia" ></input>
      </div>
  </div>
  <div class="form-group">
      <div class="col-xs-offset-3 col-xs-9">
          <input type="submit" id='btn_enviardia' class="btn btn-primary" value="enviar"></input>
      </div>
  </div>
<div id="horarios"></div>
</form>
</div>
<?php }
}
