<?php

//Fijarnos si esta seteado el form
require_once  "./view/CategoriasView.php";
require_once  "./model/CategoriasModel.php";

class CategoriasController
{
  private $view;
  private $model;

  function __construct()
  {
    $this->view = new CategoriasView();
    $this->model = new CategoriasModel();
  }

  function EditarCategoria($param){
      $id_categoria = $param[0];
      $categoria = $this->model->GetCategoria($id_categoria);
      $this->view->MostrarEditarCategoria($categoria);
  }

  function AgregarCategoria(){
    $tipo_producto = $_POST["tipo_producto"];
    if(($tipo_producto)!== ""){
      $this->model->AgregarCategoria($tipo_producto);
    }
    header(SHOPPINGADMIN);
  }

  function GuardarEditarCategoria(){
    $id_categoria = $_POST["id_categoria"];
    $tipo_producto = $_POST["tipo_producto"];
    if(($id_categoria!== "")&&($tipo_producto !== "")){
      $this->model->GuardarEditarCategoria($id_categoria,$tipo_producto);
    }

    header(SHOPPINGADMIN);
  }

  function BorrarCategoria($param){
    $this->model->BorrarCategoria($param[0]);
    header(SHOPPINGADMIN);
  }
}

 ?>
