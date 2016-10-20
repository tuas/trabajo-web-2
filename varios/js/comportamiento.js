
$(document).ready(function(){

  var login = function() {
   event.preventDefault();
     $.post( "index.php?action=administrador",$("#login-form").serialize(), function(data) {
       $('#adm').html(data);
       $('#username').val('');
       $('#password').val('');
     });
   };
var cargarinicio = function() {
  $.ajax({
    url:"index.php?action=inicio",
    method:"GET",
    dataType:"html",
    success: function(textoCargado, status){
      $("#contenido").html(textoCargado);
    }
  });
};
var cargargaleriautos = function() {
  $.ajax({
    url:"index.php?action=galeria",
    method:"GET",
    dataType:"html",
    success: function(textoCargado, status){
      $("#contenido").html(textoCargado);
    }
  });
};
var cargarservicios = function() {
  $.ajax({
    url:"index.php?action=servicios",
    method:"GET",
    dataType:"html",
    success: function(textoCargado, status){
      $("#contenido").html(textoCargado);
    }
  });
};

var cargarturno = function() {
  $.ajax({
    url:"index.php?action=turno",
    method:"GET",
    dataType:"html",
    success: function(textoCargado, status){
      $("#contenido").html(textoCargado);
    }
  });
};

var ingresofecha = function() {
   event.preventDefault();
   $.post( "index.php?action=mostrar_turnos",$("#forulario").serialize(), function(data) {
     $('#horarios').html(data);
     $('#dia').val('');
   });
 };

 var agregarturno= function() {
   event.preventDefault();
   $.post( "index.php?action=guardar_turno",$("#forulario").serialize(), function(data) {
     $('#horarios').html(data);
   });
 };

 var ocultarform= function() {
   event.preventDefault();
    $('#oculto').toggle();
 };



 $(document).on("click", "#enviarlogin", function(){
   login();
 });
$(document).on("click", "#ini", function(){
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
$(document).on("click", "#btn_enviardia", function(){
  ingresofecha();
});
$(document).on("click", "#btn_agregarturno", function(){
  agregarturno();
});
$(document).on("click", "#administrador", function(){
  ocultarform();
});

});
