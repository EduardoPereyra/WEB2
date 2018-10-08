"use strict";
document.addEventListener("DOMContentLoaded", function() {
  // cargarPropagandas();
  cargarInicio();
  let botonInicio = document.querySelectorAll(".js-LoadInicio");
  botonInicio.forEach(e=> e.addEventListener("click", cargarInicio));
  let botonMemes = document.querySelectorAll(".js-LoadMemes");
  botonMemes.forEach(e=> e.addEventListener("click", cargarMemes));
  let botonPersonajes = document.querySelectorAll(".js-LoadPersonajes");
  botonPersonajes.forEach(e=> e.addEventListener("click", cargarPersonajes));
  let botonInfo = document.querySelectorAll(".js-LoadInfo");
  botonInfo.forEach(e=> e.addEventListener("click", cargarInfo));
  let botonShopping = document.querySelectorAll(".js-LoadShopping");
  botonShopping.forEach(e=> e.addEventListener("click", cargarShopping));

  let botonLogin = document.querySelectorAll(".js-LoadLogin");
  botonLogin.forEach(e=> e.addEventListener("click", cargarLogin));

  let url = "http://web-unicen.herokuapp.com/api/groups/22/WikiSimpsonss";

  function cargando() {
    let _contenedor = document.querySelector('.contenedor');
    _contenedor.innerHTML = "<h1 class:'cargando'>Loading...</h1>";
  }

  // function cargarPropagandas() {
  //   let propagandas = document.querySelector(".propagandas");
  //   fetch("propagandas").then( function(response){
  //     if(response.ok){
  //       response.text().then(t=> propagandas.innerHTML = t);
  //     }else{
  //       propagandas.innerHTML = "Error 404 file not found :("
  //     }
  //   }).catch(function(response){
  //     propagandas.innerHTML = "No se pudieron cargar las propagandas :("
  //   });
  // }

  function cargarInicio(){
    let contenedor = document.querySelector(".contenedor");
    cargando();
    fetch("homecontent").then( function(response){
      if(response.ok){
        response.text().then(t=> contenedor.innerHTML = t);
      }else{
        contenedor.innerHTML = "Error 404 file not found :(";
      }
    }).catch(function(response) {
      contenedor.innerHTML = "No estas conectado a internet :("
    });
  }

  function cargarMemes(){
    let contenedor = document.querySelector(".contenedor");
    cargando();
    fetch("memes").then( function(response){
      if(response.ok){
        response.text().then(t=> document.querySelector(".contenedor").innerHTML = t);
      }else{
        contenedor.innerHTML = "Error 404 file not found :(";
      }
    }).catch(function(response) {
      contenedor.innerHTML = "No estas conectado a internet :("
    });
  }

  function cargarInfo(){
    let contenedor = document.querySelector(".contenedor");
    cargando();
    fetch("info").then( function(response){
      if(response.ok){
        response.text().then(t=> document.querySelector(".contenedor").innerHTML = t);
      }else{
        contenedor.innerHTML = "Error 404 file not found :(";
      }
    }).catch(function(response) {
      contenedor.innerHTML = "No estas conectado a internet :("
    });
  }

  function cargarPersonajes(){
    let contenedor = document.querySelector(".contenedor");
    cargando();
    fetch("personajes").then( function(response){
      if(response.ok){
        response.text().then(t=>{contenedor.innerHTML = t;
          mostrarTabla()
          let agregar = document.querySelector(".js-Agregar");
          agregar.addEventListener("click",agregarFila);
          let x3 = document.querySelector(".js-x3");
          x3.addEventListener("click", function(e){
            for(let i = 0; i < 3; i++){
              agregarFila();
            }
          });
          let filtro = document.querySelector(".btnfiltro");
          filtro.addEventListener("click",ponerFiltro);
        });
      }else{
        contenedor.innerHTML = "Error 404 file not found :(";
      }
    }).catch(function(response) {
      contenedor.innerHTML = "No estas conectado a internet :("
    });
  }

  function cargarShopping(){
    let contenedor = document.querySelector(".contenedor");
    cargando();
    fetch("shopping").then( function(response){
      if(response.ok){
        response.text().then(t=> contenedor.innerHTML = t);
      }else{
        contenedor.innerHTML = "Error 404 file not found :(";
      }
    }).catch(function(response) {
      contenedor.innerHTML = "No estas conectado a internet :("
    });
  }

  function cargarLogin(){
    let contenedor = document.querySelector(".contenedor");
    cargando();
    fetch("login").then( function(response){
      if(response.ok){
        response.text().then(t=> contenedor.innerHTML = t);
      }else{
        contenedor.innerHTML = "Error 404 file not found :(";
      }
    }).catch(function(response) {
      contenedor.innerHTML = "No estas conectado a internet :("
    });
  }

  //Muestra la tabla
  function mostrarTabla() {
    let tablacontenedor = document.querySelector('.tabla-contenedor');
    fetch(url, {
      method: "GET",
      mode: 'cors',
    }).then(function(r){
      if(!r.ok){
        console.log("error")
      }
      return r.json()
    }).then(function (json) {
      let personaje;
      let puntuacion;
      tablacontenedor.innerHTML = "<tr> </tr>";
      for(let i = 0; i < json.WikiSimpsonss.length; i++){
        personaje = json.WikiSimpsonss[i].thing.Personaje;
        puntuacion = json.WikiSimpsonss[i].thing.Puntuacion;
        let clase = "";
        if(puntuacion === 10){
          clase = "bueno";
        }
        if(puntuacion === 1){
          clase = "malo";
        }
        tablacontenedor.innerHTML += "<tr class="+clase+"><td>"+personaje+"</td><td>"
        +puntuacion+"</td><td>"+
        "<button class='botoneliminar btn btn-outline-danger' type='button'></button>"+
        "<button class='botoneditar btn btn-outline-danger' type='button'></button>"+
        "</td><tr>";
      }
      agregaBotonesEliminarEditar(tablacontenedor);
    }).catch(error => console.log(error))
  }

  function agregaBotonesEliminarEditar(tablacontenedor) {
    let eliminar = tablacontenedor.querySelectorAll(".botoneliminar");
    let editar = tablacontenedor.querySelectorAll(".botoneditar");
    for(let j = 0; j < eliminar.length; j++){
      eliminar[j].addEventListener("click", c => eliminarJson(j));
      editar[j].addEventListener("click", c => editarJson(j));
    }
  }

  //agrega una fila nueva en el innerHTML
  function agregarFila() {
    let tablacontenedor = document.querySelector('.tabla-contenedor');
    fetch(url, {
      method: "GET",
      mode: 'cors',
    }).then(function(r){
      if(!r.ok){
        console.log("error")
      }
      return r.json()
    }).then(function (json) {
      let personajeElegido = document.querySelector('.personaje').value;
      let puntuacionElegida = parseInt(document.querySelector('.puntuacion').value);
      if(verificarRespuesta(personajeElegido,puntuacionElegida)){
        creaObjetoNuevo(personajeElegido,puntuacionElegida,json);
      }
    }).catch(error => console.log(error))
  }


  function verificarRespuesta(personaje,puntuacion) {
    let verificar = true;
    if (personaje === " "){
      verificar = false;
    }
    if(puntuacion === 0){
      verificar = false;
    }
    return (verificar);
  }

  function creaObjetoNuevo(personaje,puntuacion,jsonn) {
    let WikiSimpsonss = {
      "Personaje": personaje,
      "Puntuacion": puntuacion
    }
    let thing  = {
      thing : WikiSimpsonss
    }
    fetch(url,{
      method:"POST",
      mode: 'cors',
      headers:{
        "Content-Type":"application/json"
      },
      "body":JSON.stringify(thing)
    }).then(function (json) {
      mostrarTabla();
    }).catch(e => console.log(e))
  }

  function eliminarJson(id) {
    let tablacontenedor = document.querySelector('.tabla-contenedor');
    console.log("Elimino pos: " + id + " exitoso");
    fetch(url).then(r => r.json()).then(function(json){
      let _id = json.WikiSimpsonss[id]._id;
      fetch(url+"/"+_id,{
        method:"DELETE",
        mode: 'cors',
        headers:{
          "Content-Type":"application/json"
        }
      }).then(function (json) {
        mostrarTabla();
      }).catch(e => {console.log(e)
      })
    }).catch(error => console.log(error))
  }

  function editarJson(id) {
    fetch(url).then(r => r.json()).then(function (json) {
      let tablaEditar = document.querySelector(".botones");
      tablaEditar.querySelector('.js-Cambios').classList.remove("d-none");
      tablaEditar.querySelector('.js-Agregar').classList.add("d-none");
      tablaEditar.querySelector('.js-x3').classList.add("d-none");
      tablaEditar.querySelector('.js-Cambios').addEventListener("click", e => editarJsonParte2(json,id));
    }).catch(error => console.log(error))
  }

  function editarJsonParte2(json,id) {
    let idd = json.WikiSimpsonss[id]._id
    let personajeElegido = document.querySelector('.personaje').value;
    let puntuacionElegida = parseInt(document.querySelector('.puntuacion').value);
    let WikiSimpsonss = {
      "Personaje": personajeElegido,
      "Puntuacion": puntuacionElegida
    }
    let thing = {
      thing:WikiSimpsonss
    }
    fetch(url + "/" + idd, {
      method:"PUT",
      mode: 'cors',
      headers:{
        "Content-Type":"application/json"
      },
      "body":JSON.stringify(thing)
    }).then(function (json) {
      mostrarTabla();
    }).then(response => response.json()).catch(e => console.log(e))
    let tablaEditar = document.querySelector(".botones");
    tablaEditar.querySelector(".js-Agregar").classList.remove("d-none");
    tablaEditar.querySelector(".js-x3").classList.remove("d-none");
    tablaEditar.querySelector(".js-Cambios").classList.add("d-none");
  }

  function ponerFiltro() {
    let filtro = parseInt(document.querySelector('.js-filtro').value);
    if(filtro !== 0){
      mostrarTablaConFitro(filtro);
    }else{
      mostrarTabla();
    }
  }

  //Muestra la tabla con filtro
  function mostrarTablaConFitro(filtro) {
    let tablacontenedor = document.querySelector('.tabla-contenedor');
    fetch(url, {
      method: "GET",
      mode: 'cors',
    }).then(function(r){
      if(!r.ok){
        console.log("error")
      }
      return r.json()
    }).then(function (json) {
      let personaje;
      let puntuacion;
      tablacontenedor.innerHTML = "<tr> </tr>";
      for(let i = 0; i < json.WikiSimpsonss.length; i++){
        personaje = json.WikiSimpsonss[i].thing.Personaje;
        puntuacion = json.WikiSimpsonss[i].thing.Puntuacion;
        if(puntuacion === filtro){
          let clase = "";
          if(puntuacion === 10){
            clase = "bueno";
          }
          if(puntuacion === 1){
            clase = "malo";
          }
          tablacontenedor.innerHTML += "<tr class="+clase+"><td>"+personaje+"</td><td>"
          +puntuacion+"</td><td>"+
          "<button class='botoneliminar btn btn-outline-danger' type='button'></button>"+
          "<button class='botoneditar btn btn-outline-danger' type='button'></button>"+
          "</td><tr>";
        }
      }
      agregaBotonesEliminarEditar(tablacontenedor);
    }).catch(error => console.log(error))
  }
})
