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
    $usuario = $_POST['usuarioId'];
    $clave = $_POST['claveId'];
    session_start();
    if(isset($_SESSION[$usuario])){
      header(SHOPPINGADMIN);
    }
    $dbUsuario = $this->model->GetUser($usuario);
    if(!empty($dbUsuario)){
      if(password_verify($clave, $dbUsuario[0]['clave'])){
        $_SESSION["Usuario"] = $usuario;
        header(SHOPPINGADMIN);
      }else{
      $this->view->MostrarLogin("Contraseña Incorrecta");
      }
    }else{
    $this->view->MostrarLogin("Usuario Incorrecto");
    }
  }
}
?>
