<?php

require_once  "./view/ProductosView.php";
require_once  "./model/ProductosModel.php";
require_once  "./model/CategoriasModel.php";
require_once "./model/ImagenesModel.php";

class ProductosController
{
  private $view;
  private $model;
  private $modelc;
  private $modeli;

  function __construct()
  {
    $this->view = new ProductosView();
    $this->model = new ProductosModel();
    $this->modelc = new CategoriasModel();
    $this->modeli = new ImagenesModel();
  }

  function EditarProducto($param){
      session_start();
      if(isset($_SESSION["Usuario"])){
        $id_producto = $param[0];
        $categorias = $this->modelc->GetCategorias();
        $producto = $this->model->GetProducto($id_producto);
        $imagenes = $this->modeli->GetImagenesProducto($id_producto);
        $this->view->MostrarEditarProducto($producto,$categorias,$imagenes);
      }else{
        header(LOGIN);
      }
  }

  function AgregarProducto(){
    session_start();
    if(isset($_SESSION["Usuario"])){
      $producto = $_POST["producto"];
      $precio = $_POST["precio"];
      $id_categoria = $_POST["id_categoria"];
      $rutaTempImagen = $_FILES['imagen']['tmp_name'];
      if((isset($producto))&&(isset($precio))&&(isset($id_categoria))&&($precio > 0)){
        $lastId = $this->model->AgregarProducto($producto,$precio,$id_categoria);
        if($_SESSION["Admin"] == true){
          $this->modeli->AgregarImagen($rutaTempImagen[0],$lastId);
        }
      }
      header(SHOPPINGADMIN);
    }else{
      header(LOGIN);
    }
  }

  function GuardarEditarProducto(){
    session_start();
    if(isset($_SESSION["Usuario"])){
      $id_producto = $_POST["id_producto"];
      $producto = $_POST["producto"];
      $precio = $_POST["precio"];
      $id_categoria = $_POST["id_categoria"];
      $rutaTempImagen = $_FILES['imagen']['tmp_name'];
      if((isset($id_producto))&&(isset($producto))&&(isset($precio))&&(isset($id_categoria))&&($precio > 0)){
        $this->model->GuardarEditarProducto($producto,$precio,$id_categoria,$id_producto);
        if($_SESSION["Admin"] == true){
          $this->modeli->AgregarImagen($rutaTempImagen[0],$id_producto);
        }
      }
      header(SHOPPINGADMIN);
    }else{
      header(LOGIN);
    }
  }

  function BorrarProducto($param){
    session_start();
    if(isset($_SESSION["Usuario"])){
      $this->model->BorrarProducto($param[0]);
      header(SHOPPINGADMIN);
    }else{
      header(LOGIN);
    }
  }
}

 ?>
