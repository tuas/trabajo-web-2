$("#tabla").html("<tr><td colspan='6'>Loading</td></tr>");

function cargarTabla(){
  event.preventDefault();
  var grupo = 22;
  $.ajax({
     method: "GET",
     dataType: 'JSON',
     url: "http://web-unicen.herokuapp.com/api/group/" + grupo + "?",
     success: function(data){
        var tabla = "";
       for (var i = 0; i < data.information.length; i++) {
        var objeto = (data.information[i]['thing']);
        var ids=data.information[i]._id;
        tabla += "<tr id='fila-"+ids+"'><td>"+objeto.servicios+"</td><td>"+objeto.ciudades+"</td><td>"+objeto.nombres+"</td><td>"+objeto.telefonos+"</td><td>"+objeto.direcciones+"</td><td><button type='button' name='button' class='btnbor' id='"+ids+"'>Borrar servicio</button></td></tr>";
      }
      if (tabla) {
      $("#tabla").html(tabla);
      }
      else {
      $("#tabla").html("<tr><td colspan='6'>Vacia</td></tr>");
      }
    },
       error:function(jqxml, status, errorThrown){
       console.log("ERRORRR");
     }
  });
}



$("#guardarInformacion").on("click",function (event) {
  event.preventDefault();
  var grupo = 22;
  var servicios = $("#servicio").val();
  var ciudades = $("#ciudad").val();
  var nombres = $("#nombre").val();
  var telefonos = $("#telefono").val();
  var direcciones = $("#direccion").val();

 var info = {
     group: grupo,
     thing: ({"servicios":servicios,"ciudades":ciudades,"nombres":nombres,"telefonos":telefonos,"direcciones":direcciones})
   };
   crear(info);
});

var crear = function(info){
   $.ajax({
     method: "POST",
     dataType: 'JSON',
     data: JSON.stringify(info),
     contentType: "application/json; charset=utf-8",
     url: "http://web-unicen.herokuapp.com/api/create",
     success: function (data) {
       $("#guardarAlert").removeClass("alert-danger")
       $("#guardarAlert").addClass("alert-success")
       $("#guardarAlert").html("Sus datos han sido enviados con exito.");
       cargarTabla();
     },
     error:function(jqxml, status, errorThrown){
       console.log(errorThrown);
     }
   });
 };


 $(document).on('click','.btnbor', function () {
   var deleteID = $(this).attr("id");
   borrarSer(deleteID);
 });

 function borrarSer (deleteID) {
   event.preventDefault();
   $.ajax({
     method: "DELETE",
     contentType: "application/json; charset=utf-8",
     url: "http://web-unicen.herokuapp.com/api/delete/"+deleteID,
     success: function(){
       cargarTabla();
     },
     error:function(jqxml, status, errorThrown){
       console.log(errorThrown);
     }
   });
 }

cargarTabla();
