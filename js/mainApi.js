'use strict'
document.addEventListener("DOMContentLoaded", verComentarios);
let templateComentarios;
let url = "api/comentario";

function verComentarios(){
  fetch('js/templates/Comentarios.handlebars')
  .then(response => response.text())
  .then(template => {
    templateComentarios = Handlebars.compile(template);
    let id = document.querySelector("#idproducto").value;
    if(id == 0){
      getComentariosAdmin();
    }else{

      let params = {
        "id_producto": id
      };
      let searchParams = new URLSearchParams(params);
      let urlc = `${url}?${searchParams}`;
      getComentarios(id, urlc);
    }
    let timer = setTimeout(verComentarios, 2000);
  });
}

function getComentariosAdmin() {
  fetch(url)
  .then(response => response.json())
  .then(jsonComentarios => {
    mostrarComentarios(jsonComentarios);
  });
}

function getComentarios(id, urlc) {
  fetch(urlc + '/' + id)
  .then(response => response.json())
  .then(jsonComentarios => {
    mostrarComentarios(jsonComentarios);
  });
}

function eliminarComentario(id_comentario) {
  console.log("Elimino comentario id: " + id_comentario);
    fetch(url+"/"+id_comentario,{
      'method':"DELETE",
      'mode': 'cors',
      'headers':{
      "Content-Type":"application/json"
      }
    }).then(r =>
        verComentarios()
      ).catch(e => {console.log(e)
    })
}

function crearComentario() {
  console.log("entro");
  let id_producto = document.querySelector('#id_producto').value;
  let mensaje = document.querySelector('#mensaje').value;
  let puntuacion = document.querySelector('#puntuacion').value;
  let id_usuario = document.querySelector('#idusuario').getAttribute("data");

  let comentario = {
    "mensaje": mensaje,
    "puntuacion": puntuacion,
    "id_producto": id_producto,
    "id_usuario": id_usuario
  }

  console.log(comentario);
  fetch(url, {
    'method':"POST",
    'mode': 'cors',
    'headers':{"Content-Type":"application/json"},
    "body":JSON.stringify(comentario)
  })
  .then(r => {
    console.log(r);
    if(r.ok){
      r.json().then(t => {
        console.log("Se creo con éxito");
        verComentarios();
      })
    }
  })
}

function mostrarComentarios(jsonComentarios) {
  let context = {
    Comentarios: jsonComentarios
  }
  let html = templateComentarios(context);
  document.querySelector("#comentarios-container").innerHTML = html;

  agregarFuncionBoton();
}

function agregarFuncionBoton() {
  let botonCrearComentario = document.querySelectorAll(".js-CrearComentario");
  botonCrearComentario.forEach(e=> e.addEventListener("click", crearComentario));
  let botonEliminarComentario = document.querySelectorAll(".js-EliminarComentario");
  botonEliminarComentario.forEach(botonEliminarComentario => {botonEliminarComentario.addEventListener("click",function(){
    eliminarComentario(botonEliminarComentario.getAttribute("data"))});
  });
}
