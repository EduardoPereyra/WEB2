<?php
require_once "Api.php";
require_once "./../model/ComentariosModel.php";

class ApiController extends Api{

  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new ComentariosModel();
  }

  function GetComentarios($param = null){
    if(isset($param)){
        $id_comentario = $param[0];
        $arreglo = $this->model->GetComentario($id_comentario);
        $data = $arreglo;
    }else{
      $data = $this->model->GetComentarios();
    }
      if(isset($data)){
        return $this->json_response($data, 200);
      }else{
        return $this->json_response(null, 404);
      }
  }

  function DeleteComentario($param = null){
    if(count($param) == 1){
        $id_comentario = $param[0];
        $r =  $this->model->BorrarComentario($id_comentario);
        if($r == false){
          return $this->json_response($r, 300);
        }
        return $this->json_response($r, 200);
    }else{
      return  $this->json_response("No task specified", 300);
    }
  }

  function InsertComentario($param = null){
    $objetoJson = $this->getJSONData();
    $r = $this->model->InsertarComentario($objetoJson->Comentario);
    return $this->json_response($r, 200);
  }
}
 ?>
