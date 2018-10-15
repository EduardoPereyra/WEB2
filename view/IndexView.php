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

    function MostrarShopping($categorias,$productos){
      $smarty = new Smarty();
      $smarty->assign('Categorias',$categorias);
      $smarty->assign('Productos',$productos);
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
}

 ?>
