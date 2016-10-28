$(function(){
  cargarinicio();
});

var cargarinicio = function() {
  $.ajax({
    url:"templates/inicio.tpl",
    method:"GET",
    dataType:"html",
    success: function(textoCargado, status){
      $("#contenido").html(textoCargado);
    }
  });
};
var cargargaleriautos = function() {
  $.ajax({
    url:"templates/galeria.tpl",
    method:"GET",
    dataType:"html",
    success: function(textoCargado, status){
      $("#contenido").html(textoCargado);
    }
  });
};
var cargarservicios = function() {
  $.ajax({
    url:"templates/servicios.tpl",
    method:"GET",
    dataType:"html",
    success: function(textoCargado, status){
      $("#contenido").html(textoCargado);
    }
  });
};

var cargarturno = function() {
  $.ajax({
    url:"templates/turno.tpl",
    method:"GET",
    dataType:"html",
    success: function(textoCargado, status){
      $("#contenido").html(textoCargado);
    }
  });
};

$(document).on("click", "#inicio", function(){
  cargarinicio();
});
$(document).on("click", "#gal", function(){
  cargargaleriautos();
});
$(document).on("click", "#serv", function(){
  cargarservicios();
});
$(document).on("click", "#turn", function(){
  cargarturno();
});
