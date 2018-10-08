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
    $usuario = $_POST["usuarioId"];
    $clave = $_POST["claveId"];
    $dbUser = $this->model->GetUsuario($usuario);

    if(isset($dbUser)){
      if(password_verify($clave, $dbUser[0]["clave"])){
        session_start();
        $_SESSION["Usuario"] = $usuario;
        header(SHOPPINGADMIN);
      }else{
      $this->view->MostrarLogin("Contraña Incorrecta");
      }
    }else{
    $this->view->MostrarLogin("Usuario Incorrecto");
    }
  }
}
?>
