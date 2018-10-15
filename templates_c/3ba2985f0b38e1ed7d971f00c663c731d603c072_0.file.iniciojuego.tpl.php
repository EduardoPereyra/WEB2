<?php
/* Smarty version 3.1.33, created on 2018-10-15 20:19:18
  from 'C:\xampp\htdocs\tpespecial\WEB2\templates\iniciojuego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc4da26ef51c0_54320331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ba2985f0b38e1ed7d971f00c663c731d603c072' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpespecial\\WEB2\\templates\\iniciojuego.tpl',
      1 => 1539627557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc4da26ef51c0_54320331 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/Estilojuego.css">
    <link rel="shortcut icon" href="images/minidona.ico">
    <title>MEMO-SIMPSONS</title>
  </head>
  <body>
    <h1>MEMO-SIMPSONS</h1>
      <button type="button" id="botoncomienzo"> COMENZAR </button>
      <div class="tiempo">
        <form class="selectorTiempo">
          <input type="radio" name="tiempo" value="500"> 0.5 segs. <br>
          <input type="radio" name="tiempo" value="1000"checked> 1 segs. <br>
          <input type="radio" name="tiempo" value="2000"> 2 segs. <br>
          <input type="radio" name="tiempo" value="4000"> 4 segs.
        </form>
      </div>
    <div class="cartas">
      <div class="carta">
        <img class="marcas" class="oculta" src="" alt="">
        <form class="botones ocultar">
          <input type="radio" name="carta0" value="1"> Tiene Homero. <br>
          <input type="radio" name="carta0" value="-1"> No tiene Homero. <br>
        </form>
      </div>
      <div class="carta">
        <img class="marcas" class="oculta" src="" alt="">
        <form class="botones ocultar">
          <input type="radio" name="carta1" value="1"> Tiene Homero. <br>
          <input type="radio" name="carta1" value="-1"> No tiene Homero. <br>
        </form>
      </div>
      <div class="carta">
        <img class="marcas" class="oculta" src="" alt="">
        <form class="botones ocultar">
          <input type="radio" name="carta2" value="1"> Tiene Homero. <br>
          <input type="radio" name="carta2" value="-1"> No tiene Homero. <br>
        </form>
      </div>
      <div class="carta">
        <img class="marcas" class="oculta" src="" alt="">
        <form class="botones ocultar">
          <input type="radio" name="carta3" value="1"> Tiene Homero. <br>
          <input type="radio" name="carta3" value="-1"> No tiene Homero. <br>
        </form>
      </div>
      <div class="carta">
        <img class="marcas" class="oculta" src="" alt="">
        <form class="botones ocultar">
          <input type="radio" name="carta4" value="1"> Tiene Homero. <br>
          <input type="radio" name="carta4" value="-1"> No tiene Homero. <br>
        </form>
      </div>
      <div class="confirmar">
        <button class="boton ocultar" type="button" name="confirmar" id="botonconfirmar"> CONFIRMAR <br><img class="homeroconfirmar" src="images/Homero.jpg"> </button>
      </div>
    </div>
    <div class="tablas">
  <div class="tabla_actual">
    <table>
      <tr>
          <th>Actual</th>
      </tr>
      <tr>
        <td>Aciertos: </td>
        <td id="aciertos">0</td>
        <td>Errores: </td>
        <td id="errores">0</td>
      </tr>
    </table>
  </div>
  <div class="tabla_partidas">
    <table>
      <tr>
          <th>Historial de Jugadas</th>
      </tr>
      <tr>
        <td>Aciertos Totales: </td>
        <td id="aciertos_totales">0</td>
        <td>Errores Totales: </td>
        <td id="errores_totales">0</td>
      </tr>
      </table>
      <table id="historial_partidas">
        <tr>
          <td>Numero de Partida: </td>
          <td>Total (Aciertos/Errores): </td>
        </tr>
    </table>
  </div>
  <h4 class="pie">&copy Wiki-Simpsons SA</h4>
  </div>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/MainJuego.js"> <?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
