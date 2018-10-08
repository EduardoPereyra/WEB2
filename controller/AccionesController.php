<?php
require_once  "./view/IndexView.php";
require_once  "SecuredController.php";

class AccionesController extends SecuredController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new IndexView();
    // $this->model = new IndexModel();
    // $this->Titulo = "Los Simpsons";
  }

  function Home(){
      $this->view->MostrarHome();
  }

  function Homecontent(){
      $this->view->MostrarHomeContent();
  }

  function Info(){
      $this->view->MostrarInfo();
  }

  function Memes(){
      $this->view->MostrarMemes();
  }

  function Personajes(){
      $this->view->MostrarPersonajes();
  }

  function Shopping(){
      $this->view->MostrarShopping();
  }

  function Shoppingadmin(){
      $this->view->MostrarShoppingadmin();
  }

}
?>
