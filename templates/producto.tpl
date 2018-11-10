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
  <div class="table-personajes">
    <table>
      <thead>
        <tr>
          <th scope="col">Categoria</th>
          <th scope="col">Producto</th>
          <th scope="col">Precio</th>
          <th scope="col">Id de Producto</th>
          <th scope="col">Codigo de Barra</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          {foreach from=$Producto item=fila}
          <td>{$fila['categoria']}</td>
          <td>{$fila['producto']}</td>
          <td>$ {$fila['precio']}</td>
          <td>{$fila['id_producto']}</td>
          <td>5901234123457</td>
        </tr>
        {/foreach}
      </tbody>
    </table>
    <table id="comentarios-container">

    </table>
    <img class="juguetes-decoraciones" src="images/juguetes-decoraciones.png" alt="juguetes-decoraciones">
    <img class="accesorios" src="images/accesorios.jpg" alt="accesorios">
    <img class="ropa" src="images/ropa.jpg" alt="ropa">
  </div>
<footer class="pie">&copy Wiki-Simpsons SA</footer>
<script src="js/handlebars.js" charset="utf-8"></script>
<script src="js/main.js" charset="utf-8"></script>
<script src="js/mainApi.js" charset="utf-8"></script>
<script src="js/jquery.min.js" charset="utf-8"></script>
<script src="js/bootstrap.min.js" charset="utf-8"></script>
</body>
</html>
