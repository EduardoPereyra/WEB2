<?php
require_once('libs/Smarty.class.php');

class CategoriasView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }

  function MostrarEditarCategoria($Categoria){
    $this->Smarty->assign('Categoria',$Categoria);
    $this->Smarty->assign('shoppingadmin',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    //$smarty->debugging = true;
    $this->Smarty->display('templates/MostrarEditarCategoria.tpl');
  }

}
