<?php
require_once('libs/Smarty.class.php');

class LoginView
{
  private $Smarty;

  function  __construct()
  {
    $this->Smarty = new Smarty();
  }

  function MostrarLogin($message = ''){
    $this->Smarty->assign('message',$message);
    $this->Smarty->display('templates/login.tpl');
  }
}


 ?>
