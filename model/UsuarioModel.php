<?php

  class UsuarioModel
  {

    function __construct()
    {
      $this->db = $this->Connect();
    }

    function Connect(){
      return new PDO('mysql:localhost;'
      .'dbname=wikisimpsons;charset=utf8'
      , 'root', '');
    }

    function GetUsuario(){

      $sentencia = $this->db->prepare("select * from usuario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function InsertarUsuario($user, $clave){
      $sentencia = $this->db->prepare("INSERT INTO usuario(usuario,clave) VALUES(?,?))");
      $sentencia->execute(array($user,$clave));
    }

    function GetUser($user){
      $sentencia = $this->db->prepare("select * from usuario where usuario=? limit 1");
      $sentencia->execute(array($user));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }



  }

 ?>
