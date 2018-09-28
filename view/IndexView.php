<?php
require('libs/Smarty.class.php');

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

    function MostrarShopping(){
      $smarty = new Smarty();
      $smarty->display('templates/shopping.tpl');
    }
}

 ?>
