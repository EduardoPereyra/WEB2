<?php
  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=wikisimpsons;charset=utf8'
    ,'root','');
  }

  function GetCategoria(){
    $db = Connect();
    $sentencia = $db->prepare("select * from categoria");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  $hola = GetCategoria();

var_dump($hola);
























?>
