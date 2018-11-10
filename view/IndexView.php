<?php
require_once('libs/Smarty.class.php');

class IndexView
{
    function MostrarHome(){
      $smarty = new Smarty();
      $smarty->display('templates/index.tpl');
    }

    function MostrarHomeContent(){
      $smarty = new Smarty();
      $smarty->display('templates/homecontent.tpl');
    }

    function MostrarInfo(){
      $smarty = new Smarty();
      $smarty->display('templates/info.tpl');

    }

    function MostrarMemes(){
      $smarty = new Smarty();
      $smarty->display('templates/memes.tpl');
    }

    function MostrarPersonajes(){
      $smarty = new Smarty();
      $smarty->display('templates/personajes.tpl');
    }

    function MostrarShopping($tabla){
      $smarty = new Smarty();
      $smarty->assign('Tabla',$tabla);
      $smarty->display('templates/shopping.tpl');
    }

    function MostrarShoppingadmin(){
      $smarty = new Smarty();
      $smarty->display('templates/shoppingadmin.tpl');
    }

    function MostrarJuego(){
      $smarty = new Smarty();
      $smarty->display('templates/iniciojuego.tpl');
    }

    function MostrarCategoria($id_categoria,$categoria,$productos){
      $smarty = new Smarty();
      $smarty->assign('Productos',$productos);
      $smarty->assign('Id_categoria',$id_categoria);
      $smarty->assign('Categoria',$categoria);
      $smarty->assign('Raiz', 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']));
      $smarty->display('templates/categoria.tpl');
    }

    function MostrarProducto($producto){
      $smarty = new Smarty();
      $smarty->assign('Producto',$producto);
      $smarty->assign('Raiz','http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']));
      $smarty->display('templates/producto.tpl');
    }

    function MostrarTablaOrdenada($tabla){
      $smarty = new Smarty();
      $smarty->assign('Tabla',$tabla);
      $smarty->assign('Raiz','http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']));
      $smarty->display('templates/tablaordenada.tpl');
    }
}

 ?>
