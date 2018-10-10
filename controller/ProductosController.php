<?php

require_once  "./view/ProductosView.php";
require_once  "./model/ProductosModel.php";
require_once  "SecuredController.php";

class ProductosController extends SecuredController
{
  private $view;
  private $model;

  function __construct()
  {
    parent::__construct();

    $this->view = new ProductosView();
    $this->model = new ProductosModel();
  }

  function MostrarProductos(){
      $productos = $this->model->GetProductos();
      $this->view->Mostrar($productos);
  }

  function EditarProducto($param){
      $id_producto = $param[0];

      $producto = $this->model->GetProducto($id_producto);
      $this->view->MostrarEditarProducto($producto);
  }

  function InsertProducto(){
    $producto = $_POST["producto"];
    $precio = $_POST["precio"];
    $id_categoria = $_POST["id_categoria"];

    $this->model->InsertarProducto($producto,$precio,$id_categoria);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function GuardarEditarProducto(){
    $id_producto = $_POST["id_producto"];
    $producto = $_POST["producto"];
    $precio = $_POST["precio"];
    $id_categoria = $_POST["id_categoria"];

    $this->model->GuardarEditarProducto($producto,$precio,$id_categoria,$id_producto);

    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }

  function BorrarProducto($param){
    $this->model->BorrarProducto($param[0]);
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
  }
}

 ?>
