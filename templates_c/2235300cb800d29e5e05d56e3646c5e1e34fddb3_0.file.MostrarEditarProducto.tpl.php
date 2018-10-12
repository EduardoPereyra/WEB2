<?php
/* Smarty version 3.1.33, created on 2018-10-12 20:48:01
  from 'C:\xampp\htdocs\tpespecial\WEB2\templates\MostrarEditarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc0ec6110ca88_01627901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2235300cb800d29e5e05d56e3646c5e1e34fddb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpespecial\\WEB2\\templates\\MostrarEditarProducto.tpl',
      1 => 1539370077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc0ec6110ca88_01627901 (Smarty_Internal_Template $_smarty_tpl) {
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
/guardareditarproducto">
    <input type="hidden" class="form-control" name="id_producto" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["id_producto"];?>
">
    <div class="form-group">
      <label for="producto">Producto</label>
      <input type="text" class="form-control" name="producto" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["producto"];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["producto"];?>
">
    </div>
    <div class="form-group">
      <label for="precio">Precio</label>
      <input type="text" class="form-control" name="precio" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["precio"];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["precio"];?>
">
    </div>
      <div class="form-group col-md-4">
        <label for="id_categoria">Id_categoria</label>
        <select name="id_categoria" class="form-control">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
          <option><?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </div>
      <button class="login btn btn-outline-success my-2 my-sm-0">Editar Producto</button>
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
