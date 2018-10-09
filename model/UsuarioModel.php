<?php

  class UsuarioModel
  {
    private $db;


    function __construct()
    {
      $this->db = $this->Connect();
    }

    function Connect(){
      return new PDO('mysql:host=localhost;'
      .'dbname=wikisimpsons;charset=utf8'
      , 'root', '');
    }

    function GetUsuarios(){
      $sentencia = $this->db->prepare("SELECT * FROM usuario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function InsertarUsuario($user, $clave){
      $sentencia = $this->db->prepare("INSERT INTO usuario(user,clave) VALUES(?,?))");
      $sentencia->execute(array($user,$clave));
    }

    function GetUser($user){
      $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE user=? LIMIT 1");
      $sentencia->execute(array($user));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
  }

 ?>
