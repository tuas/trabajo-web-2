<p>
  Bienvenido
</p>

<div>
    <h2>Tabla de turnos</h2>
    <table class="selecturno">
      <thead>
        <th>ID</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Id servicio</th>
        <th>Edit</th>
        <th>Eliminar</th>
      </thead>
      <tbody>
        {foreach from=$turno key=i item=horarios}
          <tr>
            {foreach from=$horarios key=h item=cliente}
              <td>
                <span>{$cliente}</span>
              </td>
            {/foreach}

            <td><a href="#" id="formularioeturnotabla" data-idturno="{$horarios['id_turno']}"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></td>
            <td><a href="#" id="eliminarturnotabla" data-idturno="{$horarios['id_turno']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
          </tr>
        {/foreach}
        <tr>
          <td><a href="#" id="formularioturnotabla"><span class="glyphicon glyphicon-open" aria-hidden="true"> agregar</span></a></td>
        </tr>
      </tbody>
    </table>
    <div id="modificacionturno"></div>
</div>

<div>
    <h2>Tabla de servicios</h2>
    <table class="selecturno">
      <thead>
        <th>ID</th>
        <th>Servicio</th>
        <th>Edit</th>
        <th>Eliminar</th>
      </thead>
      <tbody>
        {foreach from=$serv key=i item=servicios}
          <tr>
            {foreach from=$servicios key=h item=servicio}
              <td>
                <span>{$servicio}</span>
              </td>
            {/foreach}
            <td><a href="#" id="formularioeditarserviciotabla" data-idservicios="{$servicios['id_servicio']}"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></td>
            <td><a href="#" id="eliminarserviciotabla" data-idservicios="{$servicios['id_servicio']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
          </tr>
        {/foreach}
        <tr>
          <td><a href="#" id="formularioserviciotabla"><span class="glyphicon glyphicon-open" aria-hidden="true"> agregar</span></a></td>
        </tr>
      </tbody>
    </table>
    <div id="modificacionservicio"></div>
</div>

<div>
    <h2>Tabla de recomendados</h2>
    <table class="selecturno">
      <thead>
        <th>ID</th>
        <th>Servicio</th>
        <th>Empresa</th>
        <th>Ciudad</th>
        <th>Direccion</th>
        <th>logo</th>
        <th>Edit</th>
        <th>Eliminar</th>
      </thead>
      <tbody>
        {foreach from=$recomendado key=i item=recomedados}
          <tr>
            {foreach from=$recomedados key=h item=elemento}
              <td>
                <span>{$elemento}</span>
              </td>
            {/foreach}
            <td><a href="#" id="formularioeditarrecomendadotabla" data-idrecomendados="{$recomedados['id_recomendado']}"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></td>
            <td><a href="#" id="eliminarrecomendadotabla" data-idrecomendados="{$recomedados['id_recomendado']}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
          </tr>
        {/foreach}
        <tr>
          <td><a href="#" id="formulariorecomendadotabla"><span class="glyphicon glyphicon-open" aria-hidden="true"> agregar</span></a></td>
        </tr>
      </tbody>
    </table>
    <div id="modificacionrecomendados"></div>
</div>
