<form class="form-horizontal">
  <div class="form-group">
        <label class="control-label col-xs-3">Nombre:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputNombre" placeholder="Nombre"></input>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Apellido:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" placeholder="Apellido"></input>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Ciudad:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" id="inputCiudad" placeholder="Ciudad"></input>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Telefono:</label>
        <div class="col-xs-9">
            <input type="tel" class="form-control" placeholder="Telefono"></input>
        </div>
    </div>

    <div class="form-group">
      <label class="control-label col-xs-3">Turno:</label>
    <div class='col-xs-6'>
        <label class="control-label col-xs-3">Desde:</label>
        <div class="form-group">
            <div class='input-group date' >
                <input type='text' class="form-control" placeholder="DD/MM/AAAA"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>

    </div>

          <label class="control-label col-xs-3">A:</label>
        <div class="form-group">
            <div class='input-group date'>
                <input type='text' class="form-control" placeholder="DD/MM/AAAA"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
  </div>
</div>


    <div class="form-group">
      <label class="control-label col-xs-3">Arreglos a realizar:</label>
        <div class="col-xs-6">
              <label class="checkbox-inline">
                <input type="checkbox" id="arreglo" name="arreglos"> Techo</input>
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="arreglo" name="arreglos"> Frente</input>
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="arreglo" name="arreglos"> Laterales</input>
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="arreglo" name="arreglos"> Pisos</input>
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="arreglo" name="arreglos"> Guardabarros</input>
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="arreglo" name="arreglos"> Cerraduras</input>
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="arreglo" name="arreglos"> Chasis</input>
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="arreglo" name="arreglos"> Otros</input>
              </label>
          </div>
    </div>

    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-primary" value="Enviar"></input>
        </div>
    </div>
</form>
