<?php
/* Smarty version 3.1.33, created on 2018-10-12 20:12:26
  from 'C:\xampp\htdocs\tpespecial\WEB2\templates\shoppingadmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc0e40a21cd26_73368268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b671e26f166169edb38574b753a078c9fba5c66c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpespecial\\WEB2\\templates\\shoppingadmin.tpl',
      1 => 1539367936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc0e40a21cd26_73368268 (Smarty_Internal_Template $_smarty_tpl) {
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
  <h2>TABLA SHOPPING</h2>
  <form method="post" class="form-inline my-2 my-lg-0" action="logout">
    <button class="logout login btn btn-outline-success my-2 my-sm-0">Logout</button>
  </form>

  <div class="table-personajes">
    <table>
      <thead>
        <tr>
          <th scope="col">Id_categoria</th>
          <th scope="col">Tipo_producto</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
            <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['tipo_producto'];?>
</td>
            <td><a href="editarcategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
">Editar</a> <a href="borrarcategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
">Borrar</a></td>
      </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
  </div>
  <br>
  <div class="table-personajes">
    <table>
      <thead>
        <tr>
          <th scope="col">Id_producto</th>
          <th scope="col">Producto</th>
          <th scope="col">Precio</th>
          <th scope="col">Id_categoria</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['producto'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['id_categoria'];?>
</td>
            <td><a href="editarproducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
">Editar</a> <a href="borrarproducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
">Borrar</a></td>
      </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
  </div>
    <h3>Agregar Producto</h3>
    <form method="post" action="agregarproducto">
      <input type="hidden" class="form-control" name="id_producto">
      <div class="form-group">
        <label for="producto">Producto</label>
        <input type="text" class="form-control" name="producto" placeholder="Remera">
      </div>
      <div class="form-group">
        <label for="precio">Precio</label>
        <input type="text" class="form-control" name="precio" placeholder="999.99">
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
        <button class="login btn btn-outline-success my-2 my-sm-0">Agregar</button>
    </form>

    <h3>Agregar Categoria</h3>
    <form method="post" action="agregarcategoria">
      <input type="hidden" class="form-control" name="id_categoria">
      <div class="form-group">
        <label for="tipo_producto">Tipo_producto</label>
        <input type="text" class="form-control" name="tipo_producto" placeholder="tipo_producto">
      </div>
        <button class="login btn btn-outline-success my-2 my-sm-0">Agregar</button>
    </form>
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
