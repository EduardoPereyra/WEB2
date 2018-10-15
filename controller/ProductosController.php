<?php

require_once  "./view/ProductosView.php";
require_once  "./model/ProductosModel.php";
require_once  "./model/CategoriasModel.php";

class ProductosController
{
  private $view;
  private $model;
  private $modelc;

  function __construct()
  {
    $this->view = new ProductosView();
    $this->model = new ProductosModel();
    $this->modelc = new CategoriasModel();
  }

  function EditarProducto($param){
      session_start();
      if(isset($_SESSION["Usuario"])){
        $id_producto = $param[0];
        $categorias = $this->modelc->GetCategorias();
        $producto = $this->model->GetProducto($id_producto);
        $this->view->MostrarEditarProducto($producto,$categorias);
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
      if(($producto !== "")&&($precio !== "")&&($id_categoria !== "")&&($precio > 0)){
        $this->model->AgregarProducto($producto,$precio,$id_categoria);
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
      if(($id_producto !== "")&&($producto !== "")&&($precio !== "")&&($id_categoria !== "")&&($precio > 0)){
        $this->model->GuardarEditarProducto($producto,$precio,$id_categoria,$id_producto);
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
