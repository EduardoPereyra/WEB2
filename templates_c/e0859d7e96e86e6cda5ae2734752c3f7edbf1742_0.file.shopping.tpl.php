<?php
/* Smarty version 3.1.33, created on 2018-10-12 20:03:48
  from 'C:\xampp\htdocs\tpespecial\WEB2\templates\shopping.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc0e204d1ff75_49905626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0859d7e96e86e6cda5ae2734752c3f7edbf1742' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpespecial\\WEB2\\templates\\shopping.tpl',
      1 => 1539367419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc0e204d1ff75_49905626 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="table-personajes">
  <table>
    <thead>
      <tr>
        <th scope="col">Id_categoria</th>
        <th scope="col">Tipo_producto</th>
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
    </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>
</div>
<?php }
}
