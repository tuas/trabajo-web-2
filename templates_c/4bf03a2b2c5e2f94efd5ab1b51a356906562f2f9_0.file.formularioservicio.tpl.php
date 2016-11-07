<?php
/* Smarty version 3.1.30, created on 2016-11-04 21:58:52
  from "C:\xampp\htdocs\web1\templates\formularioservicio.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581cf68caa38d3_99784163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bf03a2b2c5e2f94efd5ab1b51a356906562f2f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\templates\\formularioservicio.tpl',
      1 => 1477620648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581cf68caa38d3_99784163 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="agregaservicio" action="" method="post">
  <div class="form-group">
        <label class="control-label col-xs-3">nombre del servicio:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" name="servicio"></input>
        </div>
    </div>
  <div class="form-group">
      <div class="col-xs-offset-3 col-xs-9">
          <input type="submit" id='btn_agregarserviciotabla' class="btn btn-primary" value="Enviar"></input>
      </div>
  </div>

</form>
<?php }
}
