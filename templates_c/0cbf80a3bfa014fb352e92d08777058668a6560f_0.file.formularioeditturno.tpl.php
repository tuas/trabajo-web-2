<?php
/* Smarty version 3.1.30, created on 2016-11-07 16:19:48
  from "C:\xampp\htdocs\web1\templates\formularioeditturno.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58209b94c7bd04_13323605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cbf80a3bfa014fb352e92d08777058668a6560f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\templates\\formularioeditturno.tpl',
      1 => 1477620648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58209b94c7bd04_13323605 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="editturno" action="" method="post">
  <div class="form-group">
    <input type="hidden" name="id_turno" value="<?php echo $_smarty_tpl->tpl_vars['turno']->value['id_turno'];?>
">
  </div>

  <div class="form-group">
        <label class="control-label col-xs-3">fecha:</label>
        <div class="col-xs-9">
            <input type="date" class="form-control" name="fecha"></input>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">hora:</label>
        <div class="col-xs-9">
            <input type="int" class="form-control" name="hora" placeholder="13"></input>
        </div>
    </div>
    <div class="form-group">
          <label class="control-label col-xs-3">Nombre:</label>
          <div class="col-xs-9">
              <input type="text" class="form-control" name="nombre" placeholder="Nombre"></input>
          </div>
      </div>
      <div class="form-group">
          <label class="control-label col-xs-3">Email:</label>
          <div class="col-xs-9">
              <input type="email" class="form-control" name="email" placeholder="ejemplo@web.com"></input>
          </div>
      </div>
      <div class="form-group">
            <label class="control-label col-xs-3">servicio:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="servicio" placeholder="servicio"></input>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" id='btn_editarturnotabla' class="btn btn-primary" value="Enviar"></input>
            </div>
        </div>

</form>
<?php }
}
