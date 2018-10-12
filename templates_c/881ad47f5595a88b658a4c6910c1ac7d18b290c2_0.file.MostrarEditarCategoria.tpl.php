<?php
/* Smarty version 3.1.33, created on 2018-10-12 21:23:36
  from 'C:\xampp\htdocs\tpespecial\WEB2\templates\MostrarEditarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc0f4b8d9a021_20975979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '881ad47f5595a88b658a4c6910c1ac7d18b290c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpespecial\\WEB2\\templates\\MostrarEditarCategoria.tpl',
      1 => 1539372215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc0f4b8d9a021_20975979 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Wiki Simpsons</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilo.css">
  <link rel="shortcut icon" href="../images/minidona.ico">
</head>
<body>
  <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['shoppingadmin']->value;?>
/guardareditarcategoria">
    <input type="hidden" class="form-control" name="id_categoria" value="<?php echo $_smarty_tpl->tpl_vars['Categoria']->value["id_categoria"];?>
">
    <div class="form-group">
      <label for="producto">Tipo_producto</label>
      <input type="text" class="form-control" name="tipo_producto" value="<?php echo $_smarty_tpl->tpl_vars['Categoria']->value["tipo_producto"];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['Categoria']->value["tipo_producto"];?>
">
    </div>
      <button class="login btn btn-outline-success my-2 my-sm-0">Editar Categoria</button>
  </form>
</body>
<footer class="pie">&copy Wiki-Simpsons SA</footer>
<?php echo '<script'; ?>
 src="../js/main.js" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/jquery.min.js" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/bootstrap.min.js" charset="utf-8"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
