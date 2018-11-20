<?php

class ImagenesModel
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

  function GetImagenesProducto($id){
      $sentencia = $this->db->prepare( "SELECT * FROM imagen WHERE id_producto=?");
      $sentencia->execute(array($id));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetImagenes(){
      $sentencia = $this->db->prepare( "SELECT * FROM imagen");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function AgregarImagen($tempPath,$id_producto){
    $path = $this->subirImagen($tempPath);
    $sentencia = $this->db->prepare("INSERT INTO imagen(source,id_producto) VALUES(?,?)");
    $sentencia->execute(array($path,$id_producto));
  }

  function BorrarImagen($id){
    $sentencia = $this->db->prepare( "DELETE FROM imagen WHERE id_imagen=?");
    $sentencia->execute(array($id));
  }

  private function subirImagen($imagen){
      $destino_final = 'images/' . uniqid() . '.jpg';
      move_uploaded_file($imagen, $destino_final);
      return $destino_final;
  }

}


 ?>
