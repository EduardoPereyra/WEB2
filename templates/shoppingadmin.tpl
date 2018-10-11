<!DOCTYPE html>
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
          {foreach from=$Categorias item=categoria}
            <td>{$categoria['id_categoria']}</td>
            <td>{$categoria['tipo_producto']}</td>
            <td><a href="editarcategoria">Editar</a> <a href="borrarcategoria">Borrar</a> <a href="modificarcategoria">Modificar</a></td>
      </tr>
          {/foreach}
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
          {foreach from=$Productos item=producto}
            <td>{$producto['id_producto']}</td>
            <td>{$producto['producto']}</td>
            <td>{$producto['precio']}</td>
            <td>{$producto['id_categoria']}</td>
            <td><a href="editarproducto">Editar</a> <a href="borrarproducto">Borrar</a> <a href="modificarproducto">Modificar</a></td>
      </tr>
          {/foreach}
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
            {foreach from=$Categorias item=categoria}
            <option>{$categoria['id_categoria']}</option>
            {/foreach}
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
<script src="js/main.js" charset="utf-8"></script>
<script src="js/jquery.min.js" charset="utf-8"></script>
<script src="js/bootstrap.min.js" charset="utf-8"></script>
</body>
</html>
