<?php
/* Smarty version 3.1.30, created on 2016-11-04 11:37:43
  from "/var/www/html/web/templates/formulariorecomendado.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581c9d375d8ff7_91780115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e39141bd55b716fc2b827171a1d1f9886ae09220' => 
    array (
      0 => '/var/www/html/web/templates/formulariorecomendado.tpl',
      1 => 1477620648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581c9d375d8ff7_91780115 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="agregarecomendado" action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="control-label col-xs-3">servicio:</label>
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
                <input type="file" name="imagenes[]" value="" id="imagenesagregar" multiple>
              </div>
          </div>
          <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" id="btn_agregarrecomendadotabla" class="btn btn-primary" value="Agregar"></input>
            </div>
        </div>

</form>
<?php }
}
