<?php
require_once "./view/IndexView.php";
require_once "./view/CategoriasView.php";
require_once "./view/ProductosView.php";
require_once "./model/CategoriasModel.php";
require_once "./model/ProductosModel.php";
require_once "./model/ImagenesModel.php";

class AccionesController
{
  private $view;
  private $viewp;
  private $modelp;
  private $viewc;
  private $modelc;
  private $modeli;

  function __construct()
  {
    $this->view = new IndexView();
    $this->viewp = new ProductosView();
    $this->modelp = new ProductosModel();
    $this->viewc = new CategoriasView();
    $this->modelc = new CategoriasModel();
    $this->modeli = new ImagenesModel();
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
      $admin = $_SESSION["Admin"];
      $productos = $this->modelp->GetProductos();
      $categorias = $this->modelc->GetCategorias();
      $imagenes= $this->modeli->GetImagenes();
      $this->viewp->MostrarTablas($categorias,$productos,$user,$admin,$imagenes);
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
    $imagenes= $this->modeli->GetImagenesProducto($param[0]);
    $producto = $this->modelp->GetProductoSelecionado($param[0]);
    $this->view->MostrarProducto($producto,$imagenes);
  }

  function Categoria($param){
    $productos = $this->modelp->GetProductosPorCategoria($param[0]);
    $this->view->MostrarCategoria($param[0],$productos);
  }
}
?>
