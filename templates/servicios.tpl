
<h2>Servicos recomendados</h2>
<table class="tablaservicio">
  <thead>
    <th>Servicio</th>
    <th>Ciudad</th>
    <th>Nombre</th>
    <th>Telefono</th>
    <th>Direccion</th>
    <th>borrar servicio</th>
  </thead>
  <tbody id="tabla">


  </tbody>
</table>
<form class="admin">
    <div class="form-group">
    <label for="informacion">Servico a agregar</label>
        <div class="form-group">
            <label class="control-label col-xs-3">Servicio:</label>
            <div class="col-xs-9">
                <input type="text" id="servicio" class="form-control" placeholder="Servicio">  </input>
              </div>
          </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Ciudad:</label>
            <div class="col-xs-9">
                <input type="text" id="ciudad" class="form-control" placeholder="Ciudad"></input>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Nombre:</label>
            <div class="col-xs-9">
                <input type="text" id="nombre" class="form-control" placeholder="Nombre"></input>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Telefono:</label>
            <div class="col-xs-9">
                <input type="tel" id="telefono" class="form-control" placeholder="Telefono"></input>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Direccion:</label>
            <div class="col-xs-9">
                <input type="text" id="direccion" class="form-control" placeholder="Direccion"></input>
            </div>
        </div>
  </div>
  <div class="btnguardar">
        <button type="submit" class="btn btn-default" id="guardarInformacion">Guardar</button>
      </div>
 </form>
 <div>
    <div id="guardarAlert" class="alert" role="alert"></div>
     </div>

<script src="varios/js/tabladeservicios.js" charset="utf-8"></script>
