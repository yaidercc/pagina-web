//ventana emergente de iniciar sesion
var btnAbrirpopup = document.getElementById("olvido"),
  overlay = document.getElementById("notificaciones"),
  popup = document.getElementById("popup"),
  btncerrar = document.getElementById("btn-cerrar-popup");
if (btnAbrirpopup && btncerrar) {
  btnAbrirpopup.addEventListener("click", function () {
    overlay.classList.add("activate");
    popup.classList.add("activate");
  });
  btncerrar.addEventListener("click", function () {
    overlay.classList.remove("activate");
    popup.classList.add("activate");
  });
}



// ventana emergente de carrito
var btnAbrirpopup1 = document.getElementById("carrito"),
  overlay1 = document.getElementById("carro"),
  popup1 = document.getElementById("productos"),
  btncerrar1 = document.getElementById("btn-cerrar-popup1");
if (btnAbrirpopup1 && btncerrar1) {
  btnAbrirpopup1.addEventListener("click", function () {
    overlay1.classList.add("activate");
    popup1.classList.add("activate");
  });
  btncerrar1.addEventListener("click", function () {
    overlay1.classList.remove("activate");
    popup1.classList.add("activate");
  });
}
// notificaciones
var btnAbrirpopup2 = document.getElementById("notificar"),
  overlay2 = document.getElementById("notificaciones"),
  popup2 = document.getElementById("popup-notificaiones"),
  btncerrar2 = document.getElementById("btn-cerrar-popup2");
if (btnAbrirpopup2 && btncerrar2) {
  btnAbrirpopup2.addEventListener("click", function () {
    overlay2.classList.add("activate");
    popup2.classList.add("activate");
  });
  btncerrar2.addEventListener("click", function () {
    overlay2.classList.remove("activate");
    popup2.classList.add("activate");
  });
}
// ventana emergente de chat
var btnAbrirpopup3 = document.getElementById("chateasion"),
  overlay3 = document.getElementById("chat"),
  popup3 = document.getElementById("chatear"),
  btncerrar3 = document.getElementById("btn-cerrar-popup3");
if (btnAbrirpopup3 && btncerrar3) {
  btnAbrirpopup3.addEventListener("click", function () {
    overlay3.classList.add("activate");
    popup3.classList.add("activate");
  });
  btncerrar3.addEventListener("click", function () {
    overlay3.classList.remove("activate");
    popup3.classList.add("activate");
  });
}
var ingresar= document.getElementsByName('registrate');
if(ingresar){
  for (let i=0; i<ingresar.length;i++){
    ingresar[i].addEventListener('click', function(){
      swal("No Se Puede Realizar Esta Accion", "registrate o inicia sesion para realizar una compra.", "warning");
    });
  }
}
// modificar input type file

("use strict");

(function (document, window, index) {
  var inputs = document.querySelectorAll(".inputfile");
  Array.prototype.forEach.call(inputs, function (input) {
    var label = input.nextElementSibling,
      labelVal = label.innerHTML;

    input.addEventListener("change", function (e) {
      var fileName = "";
      fileName = e.target.value.split("\\").pop();
      if (fileName) label.querySelector("span").innerHTML = fileName;
      else label.innerHTML = labelVal;
    });

    // Firefox bug fix
    input.addEventListener("focus", function () {
      input.classList.add("has-focus");
    });
    input.addEventListener("blur", function () {
      input.classList.remove("has-focus");
    });
  });
})(document, window, 0);

// agregar elementos al carrito
var agregar = document.querySelectorAll(".btn-carrito");
var carro = document.querySelector(".numero_productos");
var vaciar = document.querySelector("#vacio");
var CantidadProdutos = 0;
for (let i = 0; i < agregar.length; i++) {
  agregar[i].addEventListener("click", function (e) {
    e.preventDefault();
    e.stopPropagation();
    CantidadProdutos += 1;
    if(carro){
    carro.innerText = CantidadProdutos;

    }
  });
}
if (vaciar) {
  vaciar.addEventListener("click", function (e) {
    e.preventDefault();
    e.stopPropagation();
    carro.innerText = 0;
  });
}

//vaciar carito

///calificaiones con evento mouseenter
document.addEventListener("DOMContentLoaded", function () {
  var calificaciones = ["mala", "regular", "buena", "muy buena", "excelente"];
  var aux1 = document.querySelectorAll(".puntuaciones>a");
  var calif = document.querySelector(".puntuaciones .calificacion");
  for (const item of aux1) {
    item.addEventListener("mouseenter", cal);
  }
  function cal(e) {
    e.stopPropagation();
    var auxi = parseInt(e.target.id);
    var elementos = e.target.parentElement.querySelectorAll(".puntuaciones>a");

    //Quito la clase a todos, no hago un toggle por que cuando sea el cambio a un elemento superior me quitara los anteriores
    Array.from(elementos).forEach((e) => e.classList.remove("seleccionado"));

    //fitlo por los que el atributo id sea menor a el actual y en el foreach le asigno la clase seleccionado
    Array.from(elementos)
      .filter((item) => {
        return parseInt(item.id) <= auxi;
      })
      .forEach((e) => e.classList.add("seleccionado"));

    //obtengo la calificación y la asigno.
    calif.innerHTML = `${calificaciones[auxi - 1]}`;
  }
});

// validacion de fromularios php PDO

