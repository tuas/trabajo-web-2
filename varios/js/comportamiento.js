/*$(function(){
  cargarinicio();
});*/
$(document).ready(function(){

$('#ini').click(function(){
  event.preventDefault();
  var inicio = $("input#INICIO").val();
    $.get("index.php?action=inicio", {id_inicio: $(this).attr("data-idinicio")}, function(data) {
    $("#contenido").html(data);
	});
});

$('#turn').click(function(){
  event.preventDefault();
  var turno = $("input#turno").val();
    $.get("index.php?action=turno", {id_turno: $(this).attr("data-idturno")}, function(data) {
    $("#contenido").html(data);
	});
});

$('#serv').click(function(){
  event.preventDefault();
  var servicios = $("input#servicios").val();
    $.get("index.php?action=servicios", {id_servicios: $(this).attr("data-idservicios")}, function(data) {
    $("#contenido").html(data);
	});
});

$('#gal').click(function(){
  event.preventDefault();
  var galeria = $("input#GALERIA").val();
    $.get("index.php?action=galeria", {id_galeria: $(this).attr("data-idgaleria")}, function(data) {
    $("#contenido").html(data);
	});
});
});
/*
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
*/
