<?php
/* Smarty version 3.1.33, created on 2018-09-28 21:35:16
  from 'C:\xampp\htdocs\tpespecial\WEB2\templates\personajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bae827491d019_03459587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '739a75a042caedb28fb2fb0b9130b8890cd73afc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpespecial\\WEB2\\templates\\personajes.tpl',
      1 => 1538162569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bae827491d019_03459587 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div class="table-personajes">
    <table>
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Foto</th>
          <th scope="col">Frases principales</th>
          <th scope="col">Voz</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Homero Simpson</td>
          <td><img src="images/HomeroSimpson.png" alt="Personaje"></td>
          <td><ul>
            <li>"¡D'oh!"</li>
            <li>"¡Estúpido Flanders!"</li>
            <li>"¡A la grande le puse Cuca!"</li>
          </ul></td>
          <td>Dan Castellaneta</td>
        </tr>
        <tr>
          <td>Marge Simpson</td>
          <td><img src="images/MargeSimpson.png" alt="Personaje"></td>
          <td><ul>
            <li>"Hmmmm" (con acento de enfadada)</li>
            <li>"Homero ¿Estas ahi?"</li>
            <li>"No puedes esconderte de mi, paso 23 horas diarias aqui"</li>
          </ul></td>
          <td>Julie Kavner</td>
        </tr>
        <tr>
          <td>Lisa Simpson</td>
          <td><img src="images/LisaSimpson.png" alt="Personaje"></td>
          <td><ul>
            <li>"Baaaaaaaaart"</li>
            <li>"¡Un Simpson nunca se rinde!"</li>
            <li>"¡Papa No!"</li>
          </ul></td>
          <td>Yeardley Smith</td>
        </tr>
        <tr>
          <td>Bart Simpson</td>
          <td><img src="images/BartSimpson.png" alt="Personaje"></td>
          <td><ul>
            <li>"¡Ay, caramba!"</li>
            <li>"¡Yo no fui!"</li>
            <li>"No te prometo que lo intentaré, pero intentaré intentarlo"</li>
          </ul></td>
          <td>Nancy Cartwright</td>
        </tr>
        <td>Maggie Simpson</td>
        <td><img src="images/MaggieSimpson.png" alt="Personaje"></td>
        <td><ul>
          <li>*Chuk* *Chuk*</li>
          <li>*Chuk* *Chuk*</li>
          <li>"Papito"</li>
        </ul></td>
        <td>Nancy Cartwright</td>
      </tr>
      <tr>
        <td>Abraham Simpson</td>
        <td><img src="images/AbrahamSimpson.png" alt="Personaje"></td>
        <td><ul>
          <li>"¡Tengo ganas de vengarme y de hacer pis! Antes sólo era de vengarme."</li>
          <li>"¿Sabes que yo inventé los besos?"</li>
          <li>"¡Ya cómete la maldita naranja!"</li>
        </ul></td>
        <td>Dan Castellaneta</td>
      </tr>
      <td>Hugo Simpson</td>
      <td><img src="images/HugoSimpson.png" alt="Personaje"></td>
      <td><ul>
        <li>Increiblemente este personaje hablo menos que Maggie.</li>
      </ul></td>
      <td>Nancy Cartwright</td>
    </tr>
  </tbody>
</table>
</div>
<div class="ingresar input-group">
  <select class="personaje custom-select" name="personaje" id="inputGroupSelect01">
    <option value=" " selected>Nombre del Personaje</option>
    <option value="Homero Simpson">Homero Simpson</option>
    <option value="Marge Simpson">Marge Simpson</option>
    <option value="Lisa Simpson">Lisa Simpson</option>
    <option value="Bart Simpson">Bart Simpson</option>
    <option value="Maggie Simpson">Maggie Simpson</option>
    <option value="Abraham Simpson">Abraham Simpson</option>
    <option value="Hugo Simpson">Hugo Simpson</option>
  </select>
  <select class="puntuacion custom-select" name="puntuacion" id="inputGroupSelect01">
    <option value="0" selected>Puntuación</option>
    <option value="1">Uno</option>
    <option value="2">Dos</option>
    <option value="3">Tres</option>
    <option value="4">Cuatro</option>
    <option value="5">Cinco</option>
    <option value="6">Seis</option>
    <option value="7">Siete</option>
    <option value="8">Ocho</option>
    <option value="9">Nueve</option>
    <option value="10">Diez</option>
  </select>
  <div class="botones input-group-append">
    <button class="js-Agregar btn btn-outline-secondary" type="button">Agregar</button>
    <button class="js-Cambios btn btn-outline-secondary d-none" type="button">Aceptar Cambios</button>
    <button class="js-x3 btn btn-outline-secondary" type="button">X3</button>
  </div>
</div>
  <div class="filtro col-3 input-group">
    <select class="js-filtro custom-select" name="js-filtro" id="inputGroupSelect01">
      <option value="0" selected>Sin filtro</option>
      <option value="1">Uno</option>
      <option value="2">Dos</option>
      <option value="3">Tres</option>
      <option value="4">Cuatro</option>
      <option value="5">Cinco</option>
      <option value="6">Seis</option>
      <option value="7">Siete</option>
      <option value="8">Ocho</option>
      <option value="9">Nueve</option>
      <option value="10">Diez</option>
    </select>
    <div class="botones input-group-append">
      <button class="btnfiltro btn btn-outline-secondary" type="button"></button>
    </div>
  </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre del personaje</th>
      <th scope="col">Puntuación</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody class="tabla-contenedor">
  </tbody>
</table>
<?php }
}
