<?php

class ComentariosModel
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

  function GetComentarios(){
      $sentencia = $this->db->prepare("SELECT * FROM comentario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetComentariosbyproducto($id_producto){
      $sentencia = $this->db->prepare("SELECT * FROM comentario WHERE id_producto=?");
      $sentencia->execute(array($id_producto));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }


  function AgregarComentario($mensaje, $id_producto, $id_usuario,$puntuacion){
    $sentencia = $this->db->prepare("INSERT INTO comentario(mensaje, id_producto, id_usuario, puntuacion) VALUES(?,?,?,?)");
    $sentencia->execute(array($mensaje,$id_producto,$id_usuario,$puntuacion));
  }

  function BorrarComentario($id_comentario){
    $sentencia = $this->db->prepare("DELETE FROM comentario WHERE id_comentario=?");
    $sentencia->execute(array($id_comentario));
  }
}


 ?>
