<?php

class ProductosModel
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

  function GetProductos(){
      $sentencia = $this->db->prepare( "SELECT * FROM producto");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetProducto($id){
      $sentencia = $this->db->prepare( "SELECT * FROM producto WHERE id_producto=?");
      $sentencia->execute(array($id));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function GetProductosPorCategoria($id){
      $sentencia = $this->db->prepare( "SELECT * FROM producto WHERE id_categoria=?");
      $sentencia->execute(array($id));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function AgregarProducto($producto,$precio,$id_categoria){
    $sentencia = $this->db->prepare("INSERT INTO producto(producto, precio, id_categoria) VALUES(?,?,?)");
    $sentencia->execute(array($producto,$precio,$id_categoria));
  }

  function BorrarProducto($id_producto){
    $sentencia = $this->db->prepare( "DELETE FROM producto WHERE id_producto=?");
    $sentencia->execute(array($id_producto));
  }

  function GuardarEditarProducto($producto,$precio,$id_categoria,$id_producto){
    $sentencia = $this->db->prepare( "UPDATE producto SET producto = ?, precio = ?, id_categoria = ? WHERE id_producto=?");
    $sentencia->execute(array($producto,$precio,$id_categoria,$id_producto));
  }

  function GetTablaFusionada(){
    $sentencia = $this->db->prepare("SELECT p.id_producto, p.producto,p.precio,c.id_categoria,c.tipo_producto AS categoria FROM producto p, categoria c WHERE p.id_categoria = c.id_categoria ORDER BY p.id_producto");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetTablaOrdenada(){
    $sentencia = $this->db->prepare("SELECT p.id_producto, p.producto,p.precio,c.id_categoria,c.tipo_producto AS categoria FROM producto p, categoria c WHERE p.id_categoria = c.id_categoria ORDER BY p.id_categoria");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetProductoSelecionado($id_producto){
    $sentencia = $this->db->prepare("SELECT p.id_producto, p.producto,p.precio,c.id_categoria,c.tipo_producto AS categoria FROM producto p, categoria c WHERE p.id_categoria = c.id_categoria AND p.id_producto = ?");
    $sentencia->execute(array($id_producto));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

}


 ?>
