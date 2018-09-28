<?php
  class ConfigApp
  {
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      '' => 'Accionescontroller#Home',
      'home' => 'AccionesController#Home',
      'homecontent' => 'AccionesController#HomeContent',
      'info' => 'AccionesController#Info',
      'memes' => 'AccionesController#Memes',
      'personajes' => 'AccionesController#Personajes',
      'propagandas' => 'AccionesController#Propagandas',
      'shopping' => 'AccionesController#Shopping'
    ];
  }
?>
