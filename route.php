<?php
  require_once "inicio.php"

  if($_GET['action'] == ''){
    Inicio();
  }else{
    $partesURL = explode('/', $_GET['action']);

    if($partesURL[0] === 'inicio'){
      Inicio($partesURL[1],$partesURL[2]);
    }

  }


 ?>
