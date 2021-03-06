<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Wiki Simpsons</title>
  <base href="{$Raiz}/" target="_self">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="shortcut icon" href="images/minidona.ico">
</head>
<body>
    <form method="post" class="form-inline my-2 my-lg-0" action="home">
      <button class="logout login btn btn-outline-success my-2 my-sm-0">Volver</button>
    </form>
    <!-- <div class="homerpage">
      <img src="images/homers-web-page.gif" alt="homerpage">
    </div> -->
    <div id="homerpage">
    <h3>Tabla Ordenada</h3>
    <div class="table-personajes">
      <table>
        <thead>
          <tr>
            <th scope="col">Id Producto</th>
            <th scope="col">Producto</th>
            <th scope="col">Categoria</th>
            <th scope="col">Precio</th>
            <th scope="col">Id de Categoria</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            {foreach from=$Tabla item=fila}
            <td>{$fila['id_producto']}</td>
            <td>{$fila['producto']}</td>
            <td>{$fila['categoria']}</td>
            <td>$ {$fila['precio']}</td>
            <td>{$fila['id_categoria']}</td>
          </tr>
          {/foreach}
        </tbody>
      </table>
    </div>
    <footer class="pie">&copy Wiki-Simpsons SA</footer>
</div>
<script src="js/main.js" charset="utf-8"></script>
<script src="js/jquery.min.js" charset="utf-8"></script>
<script src="js/bootstrap.min.js" charset="utf-8"></script>
</body>
</html>
