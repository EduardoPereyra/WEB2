<?php

class CategoriasModel
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

  function GetCategorias(){
      $sentencia = $this->db->prepare( "SELECT * FROM categoria");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetCategoria($id){
      $sentencia = $this->db->prepare( "SELECT * FROM categoria WHERE id_categoria=?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function AgregarCategoria($tipo_producto){
    $sentencia = $this->db->prepare("INSERT INTO categoria(tipo_producto) VALUES(?)");
    $sentencia->execute(array($tipo_producto));
  }

  function BorrarCategoria($id_categoria){
    $sentencia = $this->db->prepare( "DELETE FROM categoria WHERE id_categoria=?");
    $sentencia->execute(array($id_categoria));
  }

  function GuardarEditarCategoria($id_categoria,$tipo_producto){
    $sentencia = $this->db->prepare( "UPDATE categoria SET tipo_producto = ? where id_categoria=?");
    $sentencia->execute(array($tipo_producto,$id_categoria));
  }
}

 ?>
