<?php
require_once  "./view/IndexView.php";

class AccionesController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new =IndexView();
    // $this->model = new IndexModel();
    // $this->Titulo = "Los Simpsons";
  }

  function Home(){
      $Tareas = $this->model->GetTareas();
      $this->view->Mostrar($this->Titulo, $Tareas);
  }
?>
