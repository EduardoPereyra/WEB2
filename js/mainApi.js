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
    //setTimeout(verComentarios(),2000);
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

function eliminarComentario(id) {
  let comentarios = document.querySelector("#comentarios-container");
  console.log("Elimino comentario pos: " + id);
  fetch(url).then(r => r.json()).then(function(json){
    let _id = json.id_comentario;
    fetch(url+"/"+_id,{
      method:"DELETE",
      mode: 'cors',
      headers:{
        "Content-Type":"application/json"
      }
    }).then(function (json) {
        getComentariosAdmin();
    }).catch(e => {console.log(e)
    })
  }).catch(error => console.log(error))
}

function crearComentario() {
  //Agarrar los values del formulario

  let ComentarioJson = {
    "Usuario": usuario,
    "Comentario": comentario
  }
  let thing  = {
    thing : ComentarioJson
  }
  fetch(url,{
    method:"POST",
    mode: 'cors',
    headers:{
      "Content-Type":"application/json"
    },
    "body":JSON.stringify(thing)
  }).then(function (json) {
    getComentariosAdmin();
  }).catch(e => console.log(e))
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
  for(let j = 0; j < botonEliminarComentario.length; j++){
    botonEliminarComentario[j].addEventListener("click", c => eliminarComentario(j));
  }
}
