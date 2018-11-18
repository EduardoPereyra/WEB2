<?php
require_once "Api.php";
require_once "./../model/ComentariosModel.php";

class ApiController extends Api{

  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new ComentariosModel();
  }

  function GetComentarios(){
      if(isset($_GET['id_producto'])){
        $id_producto = $_GET['id_producto'];
        $data = $this->model->GetComentariosbyproducto($id_producto);
      }else{
        $data = $this->model->GetComentarios();
      }
      if(isset($data)){
        return $this->json_response($data, 200);
      }else{
        return $this->json_response(null, 404);
      }
  }

  function InsertComentario($param = null){
    $objetoJson = $this->getJSONData();
    $r = $this->model->InsertarComentario($objetoJson->Comentario);
    return $this->json_response($r, 200);
  }
}
 ?>
