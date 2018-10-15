<?php
/* Smarty version 3.1.33, created on 2018-10-15 18:23:24
  from 'C:\xampp\htdocs\tpespecial\WEB2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc4befc80f780_20319123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7fb65305fea1d53bb10174cd5e8fee9afc8a77b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpespecial\\WEB2\\templates\\login.tpl',
      1 => 1539620601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc4befc80f780_20319123 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Wiki Simpsons</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="shortcut icon" href="images/minidona.ico">
</head>
<body>
  <div class="contenedor-login">
    <form method="post" class="form-inline my-2 my-lg-0" action="verificarlogin">
      <input class="form-control mr-sm-2" type="text" name="usuarioId" placeholder="Usuario">
      <input class="form-control mr-sm-2" type="password" name="claveId" placeholder="Clave">
      <button class="login btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
    </form>
    <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
  </div>
</body>
<footer class="pie">&copy Wiki-Simpsons SA</footer>
<?php echo '<script'; ?>
 src="js/main.js" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.min.js" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js" charset="utf-8"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
