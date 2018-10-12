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
      $id_producto = $param[0];
      $categorias = $this->modelc->GetCategorias();
      $producto = $this->model->GetProducto($id_producto);
      $this->view->MostrarEditarProducto($producto,$categorias);
  }

  function AgregarProducto(){
    $producto = $_POST["producto"];
    $precio = $_POST["precio"];
    $id_categoria = $_POST["id_categoria"];
    if(($producto !== "")&&($precio !== "")&&($id_categoria !== "")&&($precio > 0)){
      $this->model->AgregarProducto($producto,$precio,$id_categoria);
    }
    header(SHOPPINGADMIN);
  }

  function GuardarEditarProducto(){
    $id_producto = $_POST["id_producto"];
    $producto = $_POST["producto"];
    $precio = $_POST["precio"];
    $id_categoria = $_POST["id_categoria"];
    if(($id_producto !== "")&&($producto !== "")&&($precio !== "")&&($id_categoria !== "")&&($precio > 0)){
      $this->model->GuardarEditarProducto($producto,$precio,$id_categoria,$id_producto);
    }
    header(SHOPPINGADMIN);
  }

  function BorrarProducto($param){
    $this->model->BorrarProducto($param[0]);
    header(SHOPPINGADMIN);
  }
}

 ?>
