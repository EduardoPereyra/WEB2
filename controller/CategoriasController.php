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
    session_start();
    if(isset($_SESSION["Usuario"])){
      $id_categoria = $param[0];
      $categoria = $this->model->GetCategoria($id_categoria);
      $this->view->MostrarEditarCategoria($categoria);
    }else{
      header(LOGIN);
    }
  }

  function AgregarCategoria(){
    session_start();
    if(isset($_SESSION["Usuario"])){
      $tipo_producto = $_POST["tipo_producto"];
      if(($tipo_producto)!== ""){
        $this->model->AgregarCategoria($tipo_producto);
      }
      header(SHOPPINGADMIN);
    }else{
      header(LOGIN);
    }
  }

  function GuardarEditarCategoria(){
    session_start();
    if(isset($_SESSION["Usuario"])){
      $id_categoria = $_POST["id_categoria"];
      $tipo_producto = $_POST["tipo_producto"];
      if(($id_categoria!== "")&&($tipo_producto !== "")){
        $this->model->GuardarEditarCategoria($id_categoria,$tipo_producto);
      }

      header(SHOPPINGADMIN);
    }else{
      header(LOGIN);
    }
  }

  function BorrarCategoria($param){
    session_start();
    if(isset($_SESSION["Usuario"])){
      $this->model->BorrarCategoria($param[0]);
      header(SHOPPINGADMIN);
    }else{
      header(LOGIN);
    }
  }
  
}

 ?>
