// Obtener referencias a los elementos del DOM
var modal_1 = document.getElementById("modal-1");
var btn_1 = document.getElementById("btn-1");
var modal_2 = document.getElementById("modal-2");
var btn_2 = document.getElementById("btn-2");
var modal_3 = document.getElementById("modal-3");
var btn_3 = document.getElementById("btn-3");
var modal_4 = document.getElementById("modal-4");
var btn_4 = document.getElementById("btn-4");
var modal_5 = document.getElementById("modal-5");
var btn_5 = document.getElementById("btn-5");
var modal_6 = document.getElementById("modal-6");
var btn_6 = document.getElementById("btn-6");
var modal_7 = document.getElementById("modal-7");
var btn_7 = document.getElementById("btn-7");
var modal_8 = document.getElementById("modal-8");
var btn_8 = document.getElementById("btn-8");
var modal_9 = document.getElementById("modal-9");
var btn_9 = document.getElementById("btn-9");
var modal_10 = document.getElementById("modal-10");
var btn_10 = document.getElementById("btn-10");
var modal_11 = document.getElementById("modal-11");
var btn_11 = document.getElementById("btn-11");
var modal_12 = document.getElementById("modal-12");
var btn_12 = document.getElementById("btn-12");
var modal_req = document.getElementById("modal-req");
var btn_req = document.getElementById("btn-req");
var modal_sel = document.getElementById("modal-sel");
var btn_sel = document.getElementById("btn-sel");
var modal_cup = document.getElementById("modal-cup");
var btn_cup = document.getElementById("btn-cup");

// Abrir modal al hacer clic en el botón
btn_1.addEventListener("click", function() {
  modal_1.style.display = "block";
});
btn_2.addEventListener("click", function() {
  modal_2.style.display = "block";
});
btn_3.addEventListener("click", function() {
  modal_3.style.display = "block";
});
btn_4.addEventListener("click", function() {
  modal_4.style.display = "block";
});
btn_5.addEventListener("click", function() {
  modal_5.style.display = "block";
});
btn_6.addEventListener("click", function() {
  modal_6.style.display = "block";
});
btn_7.addEventListener("click", function() {
  modal_7.style.display = "block";
});
btn_8.addEventListener("click", function() {
  modal_8.style.display = "block";
});
btn_9.addEventListener("click", function() {
  modal_9.style.display = "block";
});
btn_10.addEventListener("click", function() {
  modal_10.style.display = "block";
});
btn_11.addEventListener("click", function() {
  modal_11.style.display = "block";
});
btn_12.addEventListener("click", function() {
  modal_12.style.display = "block";
});
btn_req.addEventListener("click", function() {
  modal_req.style.display = "block";
});
btn_sel.addEventListener("click", function() {
  modal_sel.style.display = "block";
});
btn_cup.addEventListener("click", function() {
  modal_cup.style.display = "block";
});

// Cerrar modal al hacer clic fuera del contenido del modal
window.addEventListener("click", function(event) {
  if (event.target == modal_1) {
    modal_1.style.display = "none";
  }
  if (event.target == modal_2) {
    modal_2.style.display = "none";
  }
  if (event.target == modal_3) {
    modal_3.style.display = "none";
  }
  if (event.target == modal_4) {
    modal_4.style.display = "none";
  }
  if (event.target == modal_5) {
    modal_5.style.display = "none";
  }
  if (event.target == modal_6) {
    modal_6.style.display = "none";
  }
  if (event.target == modal_7) {
    modal_7.style.display = "none";
  }
  if (event.target == modal_8) {
    modal_8.style.display = "none";
  }
  if (event.target == modal_9) {
    modal_9.style.display = "none";
  }
  if (event.target == modal_10) {
    modal_10.style.display = "none";
  }
  if (event.target == modal_11) {
    modal_11.style.display = "none";
  }
  if (event.target == modal_12) {
    modal_12.style.display = "none";
  }
  if (event.target == modal_req) {
    modal_req.style.display = "none";
  }
  if (event.target == modal_sel) {
    modal_sel.style.display = "none";
  }
  if (event.target == modal_cup) {
    modal_cup.style.display = "none";
  }
});



document.getElementById("btn-rq").addEventListener("click", function() {
  var url = "files/req.pdf"
  window.open(url, '_blank');
});

document.getElementById("btn-malla").addEventListener("click", function() {
  var url = "files/Malla_Curricular.pdf"
  window.open(url, '_blank');
});

document.getElementById("btn-bro").addEventListener("click", function() {
  var url = "files/Brochure.pdf"
  window.open(url, '_blank');
});

//redes sociales
document.getElementById("facebook").addEventListener("click", function() {
  var url = "https://www.facebook.com/UniversidadTecnicadeAmbatoOficial/"
  window.open(url, '_blank');
});

