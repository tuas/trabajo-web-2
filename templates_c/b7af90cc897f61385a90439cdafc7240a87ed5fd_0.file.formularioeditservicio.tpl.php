<?php
/* Smarty version 3.1.30, created on 2016-11-07 16:19:47
  from "C:\xampp\htdocs\web1\templates\formularioeditservicio.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58209b934fd837_57373881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7af90cc897f61385a90439cdafc7240a87ed5fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\templates\\formularioeditservicio.tpl',
      1 => 1477620648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58209b934fd837_57373881 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="editservicio" action="" method="post">
  <div class="form-group">
    <input type="hidden" name="id_servicio" value="<?php echo $_smarty_tpl->tpl_vars['serv']->value['id_servicio'];?>
">
  </div>

  <div class="form-group">
        <label class="control-label col-xs-3">nombre del servicio:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" name="servicio"></input>
        </div>
    </div>
  <div class="form-group">
      <div class="col-xs-offset-3 col-xs-9">
          <input type="submit" id='btn_editarserviciotabla' class="btn btn-primary" value="Enviar"></input>
      </div>
  </div>
</form>
<?php }
}
