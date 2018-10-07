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

  function login(){
    $this->view->mostrarLogin();
  }

  function logout()
  {
    session_start();
    session_destroy();
    header(home);
  }

  function verificarLogin()
  {
    $usuario = $_POST["usarioId"];
    $clave = $_POST["claveId"];
    $dbUser = $this->model->getUsuario($usuario);

    if(isset($dbUser)){
      if(password_verify($clave, $dbUser[0]["clave"])){
        session_start();
        $_SESSION["Usuario"] = $usuario;
        header(shoppingadmin);
      }else{
      $this->view->mostrarLogin("Contraña Incorrecta");
      }
    }else{
    $this->view->mostrarLogin("Usuario Incorrecto");
    }
  }
}
?>
