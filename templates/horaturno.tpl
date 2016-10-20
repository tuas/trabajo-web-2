


<form class="form-horizontal">
  <div class="form-group">
        <label class="control-label col-xs-3">Nombre:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre"></input>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Email:</label>
        <div class="col-xs-9">
            <input type="email" class="form-control" name="email" placeholder="ejemplo@web.com"></input>
        </div>
    </div>
    <div class="form-group">
      <label class="control-label col-xs-3">Elija horario y tipo de trabaja a realizar para el dia {$fecha}:</label>
    <div class='col-xs-9'>
       <table class="selecturno">
         <thead>
           <th>Horarios</th>
           <th>Mecanica</th>
           <th>Chapa</th>
           <th>Pintura</th>
         </thead>
         <tbody>
           {foreach from=$turno key=index item=horario}
              <tr>
                <td><span>{$horario[0]}</span></td>
                <td>
                  {if $horario[1] == 0}
                  <input type="radio" name="mecanica" value="{$horario[0]}"/>
                  {else}
                  <span>Ocupado</span>
                  {/if}
                </td>
                <td>
                  {if $horario[2] == 0}
                  <input type="radio" name="chapa" value="{$horario[0]}"/>
                  {else}
                  <span>Ocupado</span>
                  {/if}
                </td>
                <td>
                  {if $horario[3] == 0}
                  <input type="radio" name="pintura" value="{$horario[0]}"/>
                  {else}
                  <span>Ocupado</span>
                  {/if}
                </td>
            </tr>
          {/foreach}
          <tr>
            <td><span>Sin turno</span></td>
            <td>
              <input type="radio" name="mecanica" value="0" checked="checked"/>
            </td>
            <td>
              <input type="radio" name="chapa" value="0" checked="checked"/>
            </td>
            <td>
              <input type="radio" name="pintura" value="0" checked="checked"/>
            </td>
          </tr>
         </tbody>
       </table>
      </div>
  </div>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" id='btn_agregarturno' class="btn btn-primary" value="Enviar"></input>
        </div>
    </div>
</form>
<div class="turnosadmin">

</div>
