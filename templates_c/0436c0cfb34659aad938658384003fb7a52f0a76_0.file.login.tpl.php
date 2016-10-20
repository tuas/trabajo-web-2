<?php
/* Smarty version 3.1.30, created on 2016-10-20 00:26:25
  from "C:\xampp\htdocs\trabajo web\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807f311679631_78409439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0436c0cfb34659aad938658384003fb7a52f0a76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo web\\templates\\login.tpl',
      1 => 1476915944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807f311679631_78409439 (Smarty_Internal_Template $_smarty_tpl) {
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
