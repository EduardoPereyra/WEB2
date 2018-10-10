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
  <div class="contenedor-login">
    <form method="post" class="form-inline my-2 my-lg-0" action="verificarlogin">
      <input class="form-control mr-sm-2" type="text" name="usuarioId" placeholder="Usuario">
      <input class="form-control mr-sm-2" type="password" name="claveId" placeholder="Clave">
      <button class="login btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
    </form>
    <p>{$message}</p>
  </div>
</body>
<footer class="pie">&copy Wiki-Simpsons SA</footer>
<script src="js/main.js" charset="utf-8"></script>
<script src="js/jquery.min.js" charset="utf-8"></script>
<script src="js/bootstrap.min.js" charset="utf-8"></script>
</body>
</html>
