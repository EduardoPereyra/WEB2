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
  <form method="post" action="{$shoppingadmin}/guardareditarcategoria">
    <input type="hidden" class="form-control" name="id_categoria" value="{$Categoria["id_categoria"]}">
    <div class="form-group">
      <label for="producto">Tipo_producto</label>
      <input type="text" class="form-control" name="tipo_producto" value="{$Categoria["tipo_producto"]}" placeholder="{$Categoria["tipo_producto"]}">
    </div>
      <button class="login btn btn-outline-success my-2 my-sm-0">Editar Categoria</button>
  </form>
</body>
<footer class="pie">&copy Wiki-Simpsons SA</footer>
<script src="../js/main.js" charset="utf-8"></script>
<script src="../js/jquery.min.js" charset="utf-8"></script>
<script src="../js/bootstrap.min.js" charset="utf-8"></script>
</body>
</html>
