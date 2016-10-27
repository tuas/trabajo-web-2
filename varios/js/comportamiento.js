
$(document).ready(function(){

  var login = function() {
   event.preventDefault();
     $.post( "index.php?action=administrador",$("#login-form").serialize(), function(data) {
       $('#contenido').html(data);

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



 var etablaturno = function(){
  event.preventDefault();
  $.post( "index.php?action=form_tablaturno",{ id_turno: $(formularioeturnotabla).attr("data-idturno") }, function(data) {
    $('#modificacionturno').html(data);
  });
 }


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

 var eliminartablaturno = function(){
   event.preventDefault();
   $.post( "index.php?action=eliminar_tablaturno",{ id_turno: $(eliminarturnotabla).attr("data-idturno") }, function(data) {
     $('#contenido').html(data);
   });
}





var eliminartablaservicio= function(){
  event.preventDefault();
  $.post( "index.php?action=eliminar_tablaservicio",{ id_servicio: $(eliminarserviciotabla).attr("data-idservicios") }, function(data) {
    $('#contenido').html(data);
  });
}

var etablaservicio = function(){
 event.preventDefault();
 $.post( "index.php?action=form_tablaservicio",{ id_servicio: $(formularioeditarserviciotabla).attr("data-idservicios") }, function(data) {
   $('#modificacionservicio').html(data);
 });
}


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


var   eliminartablarecomendado= function(){
  event.preventDefault();
  $.post( "index.php?action=eliminar_tablarecomendado",{ id_recomendado: $(eliminarrecomendadotabla).attr("data-idrecomendados") }, function(data) {
    $('#contenido').html(data);
  });
}

var etablarecomendado = function(){
 event.preventDefault();
 $.post( "index.php?action=form_tablarecomendado",{ id_recomendado: $(formularioeditarrecomendadotabla).attr("data-idrecomendados") }, function(data) {
   $('#modificacionrecomendados').html(data);
 });
}


var editartablarecomendado = function() {
  event.preventDefault();
  $.post( "index.php?action=editar_tablarecomendado",$("#editrecomendado").serialize(), function(data) {
    $('#contenido').html(data);
});
};




var atablarecomendado = function(){
$.ajax({
  url:"index.php?action=form_agregarrecomendado",
  method:"GET",
  dataType:"html",
  success: function(textoCargado, status){
    $("#modificacionrecomendados").html(textoCargado);
  }
});
};

var agregartablarecomendado = function(){
  event.preventDefault();
    var formData = new FormData(this);
  $.ajax({
     url: 'index.php?action=agregarenrecomendado',
     data: formData,
     processData: false,
     contentType: false,
     type: 'POST',
     success: function(data){
       $(".contenido").html(data);
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
$(document).on("click", "#formularioeturnotabla", function(){
  etablaturno();
});
$(document).on("click", "#btn_editarturnotabla", function(){
  editartablaturno();
});
$(document).on("click", "#eliminarturnotabla", function(){
  eliminartablaturno();
});
$(document).on("click", "#formularioturnotabla", function(){
  atablaturno();
});
$(document).on("click", "#btn_agregarturnotabla", function(){
  agregartablaturno();
});

// tabla servicio
$(document).on("click", "#formularioeditarserviciotabla", function(){
  etablaservicio();
});
$(document).on("click", "#btn_editarserviciotabla", function(){
  editartablaservicio();
});
$(document).on("click", "#eliminarserviciotabla", function(){
  eliminartablaservicio();
});
$(document).on("click", "#formularioserviciotabla", function(){
  atablaservicio();
});
$(document).on("click", "#btn_agregarserviciotabla", function(){
  agregartablaservicio();
});

//tabla recomendados
$(document).on("click", "#formularioeditarrecomendadotabla", function(){
  etablarecomendado();
});
$(document).on("click", "#btn_editarrecomendadotabla", function(){
  editartablarecomendado();
});
$(document).on("click", "#eliminarrecomendadotabla", function(){
  eliminartablarecomendado();
});
$(document).on("click", "#formulariorecomendadotabla", function(){
  atablarecomendado();
});

$(document).on("submit","#btn_agregarrecomendadotabla", function(){
  agregartablarecomendado();
});

});
