<?php

require_once  "./view/ProductosView.php";
require_once "./model/ImagenesModel.php";

class ImagenesController
{
  private $view;
  private $model;

  function __construct()
  {
    $this->view = new ProductosView();
    $this->model = new ImagenesModel();
  }

  function BorrarImagen($param){
    session_start();
    if(isset($_SESSION["Usuario"])){
      $this->model->BorrarImagen($param[0]);
      header(SHOPPINGADMIN);
    }else{
      header(LOGIN);
    }
  }
}

 ?>
