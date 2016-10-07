<?php
/* Smarty version 3.1.30, created on 2016-10-07 21:59:09
  from "C:\xampp\htdocs\trabajo web\templates\turno.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f7fe8ddb4521_09108870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4a8f709ab9ee06a7bdf7191ef3f9248fbdf0063' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo web\\templates\\turno.tpl',
      1 => 1475804234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f7fe8ddb4521_09108870 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-xs-3">Nombre:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputNombre" placeholder="Nombre"></input>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Apellido:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" placeholder="Apellido"></input>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Ciudad:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputCiudad" placeholder="Ciudad"></input>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Telefono:</label>
        <div class="col-xs-9">
            <input type="tel" class="form-control" placeholder="Telefono"></input>
        </div>
    </div>

    <div class="form-group">
      <label class="control-label col-xs-3">Turno:</label>
    <div class='col-xs-6'>
        <label class="control-label col-xs-3">Desde:</label>
        <div class="form-group">
            <div class='input-group date' >
                <input type='text' class="form-control" placeholder="DD/MM/AAAA"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>

    </div>

          <label class="control-label col-xs-3">A:</label>
        <div class="form-group">
            <div class='input-group date'>
                <input type='text' class="form-control" placeholder="DD/MM/AAAA"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
  </div>
</div>


    <div class="form-group">
      <label class="control-label col-xs-3">Arreglos a realizar:</label>
        <div class="col-xs-6">
              <label class="checkbox-inline">
                <input type="checkbox" id="arreglo" name="arreglos"> Techo</input>
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="arreglo" name="arreglos"> Frente</input>
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="arreglo" name="arreglos"> Laterales</input>
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="arreglo" name="arreglos"> Pisos</input>
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="arreglo" name="arreglos"> Guardabarros</input>
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="arreglo" name="arreglos"> Cerraduras</input>
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="arreglo" name="arreglos"> Chasis</input>
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="arreglo" name="arreglos"> Otros</input>
              </label>
          </div>
    </div>

    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-primary" value="Enviar"></input>
        </div>
    </div>
</form>
<?php }
}
