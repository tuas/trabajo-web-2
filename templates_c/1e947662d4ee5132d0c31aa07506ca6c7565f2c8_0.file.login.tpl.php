<?php
/* Smarty version 3.1.30, created on 2016-11-04 21:21:39
  from "C:\xampp\htdocs\web1\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581cedd3549780_23178394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e947662d4ee5132d0c31aa07506ca6c7565f2c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web1\\templates\\login.tpl',
      1 => 1477620648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581cedd3549780_23178394 (Smarty_Internal_Template $_smarty_tpl) {
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
