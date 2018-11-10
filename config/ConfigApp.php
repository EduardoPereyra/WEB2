<?php
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]));
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] .':'.$_SERVER["SERVER_PORT"]. dirname($_SERVER["PHP_SELF"]). '/logout');
define('SHOPPINGADMIN', 'Location: http://'.$_SERVER["SERVER_NAME"] .':'.$_SERVER["SERVER_PORT"]. dirname($_SERVER["PHP_SELF"]). '/shoppingadmin');


  class ConfigApp
  {
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      '' => 'Accionescontroller#Home',
      'home' => 'AccionesController#Home',
      'homecontent' => 'AccionesController#HomeContent',
      'info' => 'AccionesController#Info',
      'memes' => 'AccionesController#Memes',
      'personajes' => 'AccionesController#Personajes',
      'propagandas' => 'AccionesController#Propagandas',
      'shopping' => 'AccionesController#Shopping',
      'shoppingadmin' => 'AccionesController#Shoppingadmin',
      'login' => 'LoginController#Login',
      'logout' => 'LoginController#Logout',
      'verificarlogin' => 'LoginController#VerificarLogin',
      'agregarproducto' => 'ProductosController#AgregarProducto',
      'editarproducto' =>'ProductosController#EditarProducto',
      'borrarproducto' => 'ProductosController#BorrarProducto',
      'guardareditarproducto' => 'ProductosController#GuardarEditarProducto',
      'agregarcategoria' => 'CategoriasController#AgregarCategoria',
      'editarcategoria' =>'CategoriasController#EditarCategoria',
      'borrarcategoria' => 'CategoriasController#BorrarCategoria',
      'guardareditarcategoria' => 'CategoriasController#GuardarEditarCategoria',
      'memo-simpsons' => 'AccionesController#Juego',
      'vertablaordenada' => 'AccionesController#TablaOrdenada',
      'verproducto' => 'AccionesController#Producto'
    ];
  }
?>
