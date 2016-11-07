
$(document).ready(function(){



var login = function() {
   event.preventDefault();
     $.post( "index.php?action=administrador",$("#login-form").serialize(), function(data) {
       $('#contenido').html(data);

     });
   };
var cargarinicio = function() {
  event.preventDefault();
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
  event.preventDefault();
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
  event.preventDefault();
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
  event.preventDefault();
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

 var agregarturno = function() {
   event.preventDefault();
   $.post( "index.php?action=guardar_turno",$("#forulario").serialize(), function(data) {
     $('#horarios').html(data);
   });
 };

 var ocultarform = function() {
   event.preventDefault();
    $('#oculto').toggle();
 };



 $(document).on("click", ".formularioeturnotabla", function(){
  event.preventDefault();
  $.post( "index.php?action=form_tablaturno",{ id_turno: $(this).attr("data-idturno") }, function(data) {
    $('#modificacionturno').html(data);
  });
});


 var editartablaturno = function() {
   event.preventDefault();
   $.post( "index.php?action=editar_tablaturno",$("#editturno").serialize(), function(data) {
     $('#contenido').html(data);
 });
 };

 var atablaturno = function(){
 $.ajax({
   url:"index.php?action=form_agregarturno",
   method:"GET",
   dataType:"html",
   success: function(textoCargado, status){
     $("#modificacionturno").html(textoCargado);
   }
 });
};

 var agregartablaturno = function(){
   event.preventDefault();
   $.post( "index.php?action=agregarentabla",$("#agregaturno").serialize(), function(data) {
     $('#contenido').html(data);
 });
 };

 $(document).on("click", ".eliminarturnotabla", function(){
   event.preventDefault();
   $.post( "index.php?action=eliminar_tablaturno",{ id_turno: $(this).attr("data-idturno") }, function(data) {
     $('#contenido').html(data);
   });
});





$(document).on("click", ".eliminarserviciotabla", function(){
  event.preventDefault();
  $.post( "index.php?action=eliminar_tablaservicio",{ id_servicio: $(this).attr("data-idservicios") }, function(data) {
    $('#contenido').html(data);
  });
});

$(document).on("click", ".formularioeditarserviciotabla", function(){
 event.preventDefault();
 $.post( "index.php?action=form_tablaservicio",{ id_servicio: $(this).attr("data-idservicios") }, function(data) {
   $('#modificacionservicio').html(data);
 });
});


var editartablaservicio = function() {
  event.preventDefault();
  $.post( "index.php?action=editar_tablaservicio",$("#editservicio").serialize(), function(data) {
    $('#contenido').html(data);
});
};

var atablaservicio = function(){
$.ajax({
  url:"index.php?action=form_agregarservicio",
  method:"GET",
  dataType:"html",
  success: function(textoCargado, status){
    $("#modificacionservicio").html(textoCargado);
  }
});
};

var agregartablaservicio = function(){
  event.preventDefault();
  $.post( "index.php?action=agregarenservicio",$("#agregaservicio").serialize(), function(data) {
    $('#contenido').html(data);
});
};


///tabla recomendado
$(document).on("click", ".eliminarrecomendadotabla", function(){
  event.preventDefault();
  console.log( $(this).attr("data-idrecomendados"));
  $.post( "index.php?action=eliminar_tablarecomendado",{ id_recomendado: $(this).attr("data-idrecomendados") }, function(data) {
    $('#contenido').html(data);
  });
});


$(document).on("click", ".formularioeditarrecomendadotabla", function(){
  event.preventDefault();
  console.log( $(this).attr("data-idrecomendados"));
  $.post( "index.php?action=form_tablarecomendado",{ id_recomendado: $(this).attr("data-idrecomendados") }, function(data) {
    $('#modificacionrecomendados').html(data);
  });
});



var editartablarecomendado = function(){
  event.preventDefault();
    var datos = new FormData(document.getElementById("editrecomendado"));
  $.ajax({
     url: 'index.php?action=editar_tablarecomendado',
     data:datos,
     processData: false,
     contentType: false,
     type: 'POST',
     success: function(data){
       $("#contenido").html(data);
     }
  });
  };




var atablarecomendado = function(){
    event.preventDefault();
$.ajax({
  url:"index.php?action=form_agregarrecomendado",
  method:"POST",
  dataType:"html",
  success: function(textoCargado, status){
    $("#modificacionrecomendados").html(textoCargado);
  }
});
};

var agregartablarecomendado = function(){
  event.preventDefault();
    var datos = new FormData(document.getElementById("agregarecomendado"));
  $.ajax({
     url: 'index.php?action=agregarenrecomendado',
     data:datos,
     processData: false,
     contentType: false,
     type: 'POST',
     success: function(data){
       $("#contenido").html(data);
     }
  });
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



// tabla turno

$(document).on("click", "#btn_editarturnotabla", function(){
  editartablaturno();
});

$(document).on("click", "#formularioturnotabla", function(){
  atablaturno();
});
$(document).on("click", "#btn_agregarturnotabla", function(){
  agregartablaturno();
});



// tabla servicio

$(document).on("click", "#btn_editarserviciotabla", function(){
  editartablaservicio();
});

$(document).on("click", "#formularioserviciotabla", function(){
  atablaservicio();
});
$(document).on("click", "#btn_agregarserviciotabla", function(){
  agregartablaservicio();
});



//tabla recomendados

//boton editar recomendado funcionlogi.tpl


//formularioeditrecomendado.tpl
$(document).on("click", ".btn_editarrecomendadotabla", function(){
  editartablarecomendado();
});

//boton de eliminar recomendado funcionlogin.tpl



//boton agregar recomendado funcionlogi.tpl
$(document).on("click", "#formulariorecomendadotabla", function(){
  atablarecomendado();
});

//formulariorecomendado.tpl
$(document).on("click","#btn_agregarrecomendadotabla", function(){
  agregartablarecomendado();
});

});
