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
  <input type="hidden" id="idproducto" value="0">
  <h2>TABLA SHOPPING</h2>
  <form method="post" class="form-inline my-2 my-lg-0" action="logout">
    <button class="logout login btn btn-outline-success my-2 my-sm-0">Logout</button>
  </form>
  <p><img class="icono" src="images/Homero.jpg" alt="Perfil">Bienvenido de nuevo {$User|capitalize}!</p>
  {if $Admin == true}
  <p>Su cuenta es Admin</p>
  {else}
  <p>Su cuenta no es Admin</p>
  {/if}
  <div class="formulario">
    <div class="formularioizq">
      <h3>Agregar Producto</h3>
      <form method="post" action="agregarproducto" enctype="multipart/form-data">
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
        {if $Admin == true}
        <div class="form-group">
          <label for="imagen">Imagen</label>
          <br>
          <input type="file" id="imagen" name="imagen[]">
        </div>
        {/if}
        <button class="login btn btn-outline-success my-2 my-sm-0">Agregar</button>
      </form>
    </div>
    <div class="formularioder">
      <h3>Agregar Categoria</h3>
      <form method="post" action="agregarcategoria" enctype="multipart/form-data">
        <input type="hidden" class="form-control" name="id_categoria">
        <div class="form-group">
          <label for="tipo_producto">Tipo de Producto</label>
          <input type="text" class="form-control" name="tipo_producto" placeholder="Tipo de Producto">
        </div>
        <button class="login btn btn-outline-success my-2 my-sm-0">Agregar</button>
      </form>
    </div>
    <div class="formularioder">
      <h3>Agregar Comentario</h3>
      <form>
        <input type="hidden" id="idusuario" data="{$smarty.session.idUsuario}">
        <div class="form-group">
          <label for="mensaje">Mensaje</label>
          <input id="mensaje" type="text" class="form-control" name="mensaje" placeholder="Mensaje">
        </div>
        <div class="form-group">
          <label for="id_producto">Producto</label>
          <select id="id_producto" name="id_producto" class="form-control">
            {foreach from=$Productos item=producto}
            <option value="{$producto['id_producto']}">{$producto['producto']}</option>
            {/foreach}
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="puntuacion">Puntuacion</label>
          <select id="puntuacion" name="puntuacion" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5" selected>5</option>
          </select>
        </div>
        <button type="button" class="js-CrearComentario login btn btn-outline-success my-2 my-sm-0" name="crearComentario">Agregar</button>
      </form>
    </div>
  </div>
  <div class="">
    <div class="table-personajes table-catadm">
      <table>
        <thead>
          <tr>
            <th scope="col">Id Categoria</th>
            <th scope="col">Tipo de Producto</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            {foreach from=$Categorias item=categoria}
            <td>{$categoria['id_categoria']}</td>
            <td>{$categoria['tipo_producto']}</td>
            <td><a href="verproductos/{$categoria['id_categoria']}">Ver Productos</a> - <a href="editarcategoria/{$categoria['id_categoria']}">Editar</a> - <a href="borrarcategoria/{$categoria['id_categoria']}">Borrar</a></td>
          </tr>
          {/foreach}
        </tbody>
      </table>
    </div>
    <br>
    <div class="table-personajes table-prodadm">
      <table>
        <thead>
          <tr>
            <th scope="col">Id Producto</th>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Id Categoria</th>
            <th scope="col">Imagenes</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            {foreach from=$Productos item=producto}
            <td>{$producto['id_producto']}</td>
            <td>{$producto['producto']}</td>
            <td>$ {$producto['precio']}</td>
            <td>{$producto['id_categoria']}</td>
            <td>
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  {foreach from=$Imagenes item=imagen}
                  {if $imagen['id_producto'] == $producto['id_producto']}
                  <div class="carousel-item">
                    <img class="imagenproducto" src="{$imagen['source']}" alt="Imagen">
                  </div>
                  {/if}
                  {/foreach}
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </td>
            <td><a href="editarproducto/{$producto['id_producto']}">Editar</a> <a href="borrarproducto/{$producto['id_producto']}">Borrar</a></td>
          </tr>
          {/foreach}
        </tbody>
      </table>
    </div>
  <div class="table-personajes table-comentarios">
    <table>
      <thead>
        <th>Id Usuario</th>
        <th>Id Producto</th>
        <th>Comentario</th>
        <th>Puntuacion</th>
        <th>Borrar</th>
      </thead>
      <tbody id="comentarios-container">

      </tbody>
    </table>
  </div>
</div>
</body>
<footer class="pie">&copy Wiki-Simpsons SA</footer>
<script src="js/handlebars.js" charset="utf-8"></script>
<script src="js/jquery.min.js" charset="utf-8"></script>
<script src="js/bootstrap.min.js" charset="utf-8"></script>
<script src="js/mainApi.js" charset="utf-8"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>
