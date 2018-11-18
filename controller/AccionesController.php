<?php
require_once "./view/IndexView.php";
require_once "./view/CategoriasView.php";
require_once "./view/ProductosView.php";
require_once "./model/CategoriasModel.php";
require_once "./model/ProductosModel.php";

class AccionesController
{
  private $view;
  private $viewp;
  private $modelp;
  private $viewc;
  private $modelc;

  function __construct()
  {
    $this->view = new IndexView();
    $this->viewp = new ProductosView();
    $this->modelp = new ProductosModel();
    $this->viewc = new CategoriasView();
    $this->modelc = new CategoriasModel();
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
    $tabla = $this->modelp->GetTablaFusionada();
    $this->view->MostrarShopping($tabla);
  }

  function Shoppingadmin(){
    session_start();
    if(isset($_SESSION["Usuario"])){
      $user = $_SESSION["Usuario"];

      $productos = $this->modelp->GetProductos();
      $categorias = $this->modelc->GetCategorias();
      $this->viewp->MostrarTablas($categorias,$productos,$user);
    }else{
      header(LOGIN);
    }
  }

  function Juego(){
    $this->view->MostrarJuego();
  }

  function TablaOrdenada(){
    $tabla = $this->modelp->GetTablaOrdenada();
    $this->view->MostrarTablaOrdenada($tabla);
  }

  function Producto($param){
    $producto = $this->modelp->GetProductoSelecionado($param[0]);
    $this->view->MostrarProducto($producto);
  }

  function Categoria($param){
    $productos = $this->modelp->GetProductosPorCategoria($param[0]);
    $this->view->MostrarCategoria($param[0],$productos);
  }
}
?>
