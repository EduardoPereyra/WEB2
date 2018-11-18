<?php

class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'comentario#GET'=> 'ApiController#GetComentarios',
      'comentario#DELETE'=> 'ApiBorrarComentariosController#DeleteComentario',
      'comentario#POST'=> 'ApiController#InsertComentario'
    ];
}
 ?>
