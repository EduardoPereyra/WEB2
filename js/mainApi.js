'use strict'
document.addEventListener("DOMContentLoaded", VerComentarios);
let templateComentarios;

function VerComentarios(){
  fetch('js/templates/Comentarios.handlebars')
  .then(response => response.text())
  .then(template => {
    templateComentarios = Handlebars.compile(template);
    GetComentarios();
  });
}

function GetComentarios() {
  fetch("api/comentario")
  .then(response => response.json())
  .then(jsonComentarios => {
    mostrarComentarios(jsonComentarios);
  });
}

function mostrarComentarios(jsonComentarios) {
  let context = {
    Comentarios: jsonComentarios
  }
  let html = templateComentarios(context);
  document.querySelector("#comentarios-container").innerHTML = html;
}
