<?php
require_once "./view/IndexView.php";
require_once "./view/LoginView.php";
require_once "./model/UsuarioModel.php";


class LoginController
{
  private $view;
  private $model;

  function __construct()
  {
    $this->view = new LoginView();
    $this->model = new UsuarioModel();
  }

  function Login(){
    $this->view->mostrarLogin();
  }

  function Logout()
  {
    session_start();
    session_destroy();
    header(HOME);
  }

  function VerificarLogin()
  {
    if(null !== ($_POST['usuarioId']) && null !== ($_POST['claveId'])){
      $usuario = $_POST['usuarioId'];
      $clave = $_POST['claveId'];
      session_start();
      if(isset($_SESSION[$usuario])){
        header(SHOPPINGADMIN);
      }
      $dbUsuario = $this->model->GetUser($usuario);
      if(!empty($dbUsuario)){
        if(password_verify($clave, $dbUsuario[0]['clave'])){
          // $admin = $dbUsuario[0]['admin']
          $_SESSION["Usuario"] = $usuario;
          $_SESSION["Admin"] = $dbUsuario[0]['admin']? true : false;
          header(SHOPPINGADMIN);
        }else{
          $this->view->MostrarLogin("Contraseña Incorrecta.");
        }
      }else{
        $this->view->MostrarLogin("Usuario Incorrecto.");
      }
    }else{
      $this->view->MostrarLogin("Debe Ingresarse Primero.");
    }
  }

  function CreadorCuenta(){
    $this->view->MostrarCrearCuenta();
  }

  function CrearCuenta(){
    if(null !== ($_POST['usuarioId']) && null !== ($_POST['claveId'])){
        $user = $_POST['usuarioId'];
        if(null !== $this->model->getUser($user)){
          $clave = $_POST['claveId'];
          $hash = password_hash($clave, PASSWORD_DEFAULT);
          $this->model->InsertarUsuario($user,$clave,0);
          $this->VerificarLogin();
        }else{
          $this->view->MostrarLogin("Ese usuario ya existe.");
        }
    }else{
      $this->view->MostrarLogin("Debe Ingresarse Primero.");
    }
  }


}
?>
