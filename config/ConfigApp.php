<?php

  class ConfigApp
  {
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      '' => 'Accionescontroller#Home',
      'home' => 'AccionesController#Home',
      'info' => 'AccionesController#Info',
      'memes' => 'AccionesController#Memes',
      'personajes' => 'AccionesController#Personajes',
      'shopping' => 'AccionesController#Shopping'
    ];
  }
?>
