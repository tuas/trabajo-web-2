<?php
/* Smarty version 3.1.30, created on 2016-10-28 01:40:03
  from "C:\xampp\htdocs\web\templates\formularioeditrecomendado.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58129053b387e4_80320176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57ab8e74ce1df5757527f4470c0fa5fa85761076' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\formularioeditrecomendado.tpl',
      1 => 1477611233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58129053b387e4_80320176 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="editrecomendado" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input type="hidden" name="id_recomendado" value="<?php echo $_smarty_tpl->tpl_vars['recomendado']->value['id_recomendado'];?>
">
  </div>

  <div class="form-group">
      <label class="control-label col-xs-3">hora:</label>
      <div class="col-xs-9">
          <input type="text" class="form-control" name="servicio" placeholder="Servicio"></input>
      </div>
  </div>
  <div class="form-group">
        <label class="control-label col-xs-3">Empresa:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" name="empresa" placeholder="Empresa"></input>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">ciudad:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" name="ciudad" placeholder="Ciudad"></input>
        </div>
    </div>
    <div class="form-group">
          <label class="control-label col-xs-3">direccion:</label>
          <div class="col-xs-9">
              <input type="text" class="form-control" name="direccion" placeholder="direccion"></input>
          </div>
      </div>
      <div class="form-group">
            <label class="control-label col-xs-3">logo:</label>
            <div class="col-xs-9">
              <input type="file" name="imagenes[]" required value="" id="imagenesedit" multiple>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" id='btn_editarrecomendadotabla' class="btn btn-primary" value="Enviar"></input>
            </div>
        </div>

</form>
<?php }
}
