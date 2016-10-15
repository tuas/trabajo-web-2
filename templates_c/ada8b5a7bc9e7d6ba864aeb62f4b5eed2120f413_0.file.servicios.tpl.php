<?php
/* Smarty version 3.1.30, created on 2016-10-12 23:03:44
  from "C:\xampp\htdocs\trabajo web\templates\servicios.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fea53039c812_34708165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ada8b5a7bc9e7d6ba864aeb62f4b5eed2120f413' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo web\\templates\\servicios.tpl',
      1 => 1475804190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fea53039c812_34708165 (Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Servicos recomendados</h2>
<table class="tablaservicio">
  <thead>
    <th>Servicio</th>
    <th>Ciudad</th>
    <th>Nombre</th>
    <th>Telefono</th>
    <th>Direccion</th>
    <th>borrar servicio</th>
  </thead>
  <tbody id="tabla">


  </tbody>
</table>
<form class="admin">
    <div class="form-group">
    <label for="informacion">Servico a agregar</label>
        <div class="form-group">
            <label class="control-label col-xs-3">Servicio:</label>
            <div class="col-xs-9">
                <input type="text" id="servicio" class="form-control" placeholder="Servicio">  </input>
              </div>
          </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Ciudad:</label>
            <div class="col-xs-9">
                <input type="text" id="ciudad" class="form-control" placeholder="Ciudad"></input>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Nombre:</label>
            <div class="col-xs-9">
                <input type="text" id="nombre" class="form-control" placeholder="Nombre"></input>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Telefono:</label>
            <div class="col-xs-9">
                <input type="tel" id="telefono" class="form-control" placeholder="Telefono"></input>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Direccion:</label>
            <div class="col-xs-9">
                <input type="text" id="direccion" class="form-control" placeholder="Direccion"></input>
            </div>
        </div>
  </div>
  <div class="btnguardar">
        <button type="submit" class="btn btn-default" id="guardarInformacion">Guardar</button>
      </div>
 </form>
 <div>
    <div id="guardarAlert" class="alert" role="alert"></div>
     </div>

<?php echo '<script'; ?>
 src="varios/js/tabladeservicios.js" charset="utf-8"><?php echo '</script'; ?>
>
<?php }
}
