<?php
class SecuredController
{
  function __contruct(){
    session_start();
    if(isset($_SESSION["Usuario"])){
      if(isset($_SESSION['LAST_ACTIVITY']) &&(time() - $_SESSION['LAST_ACTIVITY'] > 600)){
      $this->logout();
      }
      $_SESSION['LAST_ACTIVITY'] = time();
    }else{
      header(home);
    }
  }

  function logout(){
    session_start();
    session_destroy();
    header(home);
  }





}
 ?>
