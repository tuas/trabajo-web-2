<?php
/* Smarty version 3.1.30, created on 2016-10-20 04:31:43
  from "C:\xampp\htdocs\trabajo web\templates\horaturno.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58082c8f622bf7_68528237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46e4e0bf65831f66af861203dcf312345a7514ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo web\\templates\\horaturno.tpl',
      1 => 1476929473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58082c8f622bf7_68528237 (Smarty_Internal_Template $_smarty_tpl) {
?>



<form class="form-horizontal">
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
      <label class="control-label col-xs-3">Elija horario y tipo de trabaja a realizar para el dia <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
:</label>
    <div class='col-xs-9'>
       <table class="selecturno">
         <thead>
           <th>Horarios</th>
           <th>Mecanica</th>
           <th>Chapa</th>
           <th>Pintura</th>
         </thead>
         <tbody>
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['turno']->value, 'horario', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['horario']->value) {
?>
              <tr>
                <td><span><?php echo $_smarty_tpl->tpl_vars['horario']->value[0];?>
</span></td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['horario']->value[1] == 0) {?>
                  <input type="radio" name="mecanica" value="<?php echo $_smarty_tpl->tpl_vars['horario']->value[0];?>
"/>
                  <?php } else { ?>
                  <span>Ocupado</span>
                  <?php }?>
                </td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['horario']->value[2] == 0) {?>
                  <input type="radio" name="chapa" value="<?php echo $_smarty_tpl->tpl_vars['horario']->value[0];?>
"/>
                  <?php } else { ?>
                  <span>Ocupado</span>
                  <?php }?>
                </td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['horario']->value[3] == 0) {?>
                  <input type="radio" name="pintura" value="<?php echo $_smarty_tpl->tpl_vars['horario']->value[0];?>
"/>
                  <?php } else { ?>
                  <span>Ocupado</span>
                  <?php }?>
                </td>
            </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          <tr>
            <td><span>Sin turno</span></td>
            <td>
              <input type="radio" name="mecanica" value="0" checked="checked"/>
            </td>
            <td>
              <input type="radio" name="chapa" value="0" checked="checked"/>
            </td>
            <td>
              <input type="radio" name="pintura" value="0" checked="checked"/>
            </td>
          </tr>
         </tbody>
       </table>
      </div>
  </div>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" id='btn_agregarturno' class="btn btn-primary" value="Enviar"></input>
        </div>
    </div>
</form>
<div class="turnosadmin">

</div>
<?php }
}
