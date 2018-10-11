<?php

//Fijarnos si esta seteado el form
require_once  "./view/ProductosView.php";
require_once  "./model/ProductosModel.php";

class ProductosController
{
  private $view;
  private $model;

  function __construct()
  {
    $this->view = new ProductosView();
    $this->model = new ProductosModel();
  }

  function EditarProducto($param){
      $id_producto = $param[0];
      $producto = $this->model->GetProducto($id_producto);
      $this->view->MostrarEditarProducto($producto);
  }

  function AgregarProducto(){
    $producto = $_POST["producto"];
    $precio = $_POST["precio"];
    $id_categoria = $_POST["id_categoria"];
    $this->model->AgregarProducto($producto,$precio,$id_categoria);

    header(SHOPPINGADMIN);
  }

  function GuardarEditarProducto(){
    $id_producto = $_POST["id_producto"];
    $producto = $_POST["producto"];
    $precio = $_POST["precio"];
    $id_categoria = $_POST["id_categoria"];

    $this->model->GuardarEditarProducto($producto,$precio,$id_categoria,$id_producto);

    header(SHOPPINGADMIN);
  }

  function BorrarProducto($param){
    $this->model->BorrarProducto($param[0]);
    header(SHOPPINGADMIN);
  }
}

 ?>
