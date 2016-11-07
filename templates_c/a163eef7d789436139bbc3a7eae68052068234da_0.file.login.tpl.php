<?php
/* Smarty version 3.1.30, created on 2016-11-04 11:32:07
  from "/var/www/html/web/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581c9be792edc8_91543807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a163eef7d789436139bbc3a7eae68052068234da' => 
    array (
      0 => '/var/www/html/web/templates/login.tpl',
      1 => 1477620648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581c9be792edc8_91543807 (Smarty_Internal_Template $_smarty_tpl) {
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
