<?php
require('libs/Smarty.class.php');

class IndexView
{
    function Mostrar()
    {
      $smarty = new Smarty();
      // $smarty->assign('Titulo',$Titulo);

      $smarty->display('templates/header.tpl');
    }

}

 ?>
