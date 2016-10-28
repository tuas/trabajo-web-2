<?php
/* Smarty version 3.1.30, created on 2016-10-28 01:10:04
  from "C:\xampp\htdocs\web\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5812894cd0dc17_13509838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cc85ced0192540a21cd72ce473209412fd224c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\login.tpl',
      1 => 1476932584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5812894cd0dc17_13509838 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="#" id="administrador"><span class="glyphicon glyphicon-user" aria-hidden="true"> Administrador </span> </a>
<div id='oculto'>
				<label class="control-label col-xs-2">Ingrese usuario</label>
				   <form id="login-form"class="col-xs-10">
					     <input id="username" type="text" name="username" placeholder="Username" required>
					     <input id="password" type="password" name="password" placeholder="Password" required>
					     <input id="enviarlogin" type="submit" name="login" class="login loginmodal-submit" value="Login">
				   </form>
</div>
<?php }
}
