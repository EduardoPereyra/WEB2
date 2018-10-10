<?php
require('libs/Smarty.class.php');

class ProductosView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }

  function Mostrar($Productos){
    $this->Smarty->assign('Productos',$Productos);
    //$smarty->debugging = true;
    $this->Smarty->display('templates/shoppingtpl.tpl');
  }

  function MostrarEditarProducto($Producto){
    $this->Smarty->assign('Producto',$Producto);
    $this->Smarty->assign('shoppingadmin',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    //$smarty->debugging = true;
    $this->Smarty->display('templates/MostrarEditarProducto.tpl');
  }

}









 ?>
