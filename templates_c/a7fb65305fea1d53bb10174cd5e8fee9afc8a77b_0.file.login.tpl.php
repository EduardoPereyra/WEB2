<?php
/* Smarty version 3.1.33, created on 2018-10-08 21:17:48
  from 'C:\xampp\htdocs\tpespecial\WEB2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbbad5c26cff4_90923362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7fb65305fea1d53bb10174cd5e8fee9afc8a77b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpespecial\\WEB2\\templates\\login.tpl',
      1 => 1539025700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbbad5c26cff4_90923362 (Smarty_Internal_Template $_smarty_tpl) {
?>  <form method="post" class="form-inline my-2 my-lg-0" action="verificarlogin">
  <input class="form-control mr-sm-2" type="text" name="usuarioId" id="usuarioId" placeholder="Usuario">
  <input class="form-control mr-sm-2" type="password" name="claveId" id="claveId" placeholder="Clave">
  <button class="login btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
  <div class="">
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

  </div>
<?php }
}
