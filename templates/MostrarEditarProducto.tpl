<!DOCTYPE html>
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
  <form method="post" action="{$shoppingadmin}/guardareditarproducto" enctype="multipart/form-data">
    <input type="hidden" class="form-control" name="id_producto" value="{$Producto["id_producto"]}">
    <div class="form-group">
      <label for="producto">Producto</label>
      <input type="text" class="form-control" name="producto" value="{$Producto["producto"]}" placeholder="{$Producto["producto"]}">
    </div>
    <div class="form-group">
      <label for="precio">Precio</label>
      <input type="text" class="form-control" name="precio" value="{$Producto["precio"]}" placeholder="{$Producto["precio"]}">
    </div>
      <div class="form-group col-md-4">
        <label for="id_categoria">Id_categoria</label>
        <select name="id_categoria" class="form-control">
          {foreach from=$Categorias item=categoria}
          <option>{$categoria['id_categoria']}</option>
          {/foreach}
        </select>
      </div>
      <div class="table-personajes form-group">
        <table>
          <tr>
            <th>Imagen</th>
            <th>Borrar</th>
          </tr>
          {foreach from=$Imagenes item=imagen}
          <tr>
            <td><img src="../{$imagen['source']}" alt="Image"></td>
            <td><a class="btn btn-danger" href="{$shoppingadmin}/eliminarimagen/{$imagen['id_imagen']}">Borrar</a></td>
          </tr>
          {/foreach}
        </table>
      </div>
      <div class="form-group">
        <label for="imagen">Imagen</label>
        <br>
        <input type="file" id="imagen" name="imagen[]">
      </div>
      <button class="login btn btn-outline-success my-2 my-sm-0">Editar Producto</button>
  </form>
</body>
<footer class="pie">&copy Wiki-Simpsons SA</footer>
<script src="../js/main.js" charset="utf-8"></script>
<script src="../js/jquery.min.js" charset="utf-8"></script>
<script src="../js/bootstrap.min.js" charset="utf-8"></script>
</body>
</html>
