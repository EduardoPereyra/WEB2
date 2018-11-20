<?php
require_once('libs/Smarty.class.php');

class ProductosView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }

  function MostrarTablas($Categorias,$Productos, $User,$Imagenes){
    $this->Smarty->assign('Productos',$Productos);
    $this->Smarty->assign('Categorias',$Categorias);
    $this->Smarty->assign('User',$User);
    $this->Smarty->assign('Imagenes',$Imagenes);
    //$smarty->debugging = true;
    $this->Smarty->display('templates/shoppingadmin.tpl');
  }

  function MostrarEditarProducto($Producto,$Categorias,$Imagenes){
    $this->Smarty->assign('Producto',$Producto);
    $this->Smarty->assign('Categorias',$Categorias);
    $this->Smarty->assign('Imagenes',$Imagenes);
    $this->Smarty->assign('shoppingadmin',"http://".$_SERVER["SERVER_NAME"].':'.$_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]));
    //$smarty->debugging = true;
    $this->Smarty->display('templates/MostrarEditarProducto.tpl');
  }

}









 ?>
