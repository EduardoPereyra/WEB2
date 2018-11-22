<?php
require_once "Api.php";
require_once "ApiSecuredController.php";
require_once "../model/ComentariosModel.php";
require_once "../model/UsuarioModel.php";
class ApiBorrarComentariosController extends ApiSecuredController{
  private $ComentariosModel;
  private $UsuarioModel;

  function __construct()
  {
    parent::__construct();
    $this->ComentariosModel = new ComentariosModel();
    $this->UsuarioModel = new UsuarioModel();
  }

  function DeleteComentario($param = null){
    if ($this->Logueado() && $this->esAdmin()) {
      if(count($param) == 1){
          $id_comentario = $param[0];
          $r =  $this->ComentariosModel->BorrarComentario($id_comentario);
          if($r == false){
            return $this->json_response($r, 300);
          }
          return $this->json_response($r, 200);
      }else{
        return  $this->json_response("No task specified", 300);
      }
   }
  }

  function InsertComentario($param = null){
    if ($this->Logueado()) {
      $objetoJson = $this->getJSONData();
      $r = $this->ComentariosModel->AgregarComentario($objetoJson->mensaje,$objetoJson->id_producto,$objetoJson->id_usuario,$objetoJson->puntuacion);
      return $this->json_response($r, 200);
    }
  }
}
 ?>
