
<h2>Servicios recomendados</h2>
<table class="tablaservicio">
  <thead>
    <th>Identificacion de servicio</th>
    <th>Servicio</th>
    <th>Empreza</th>
    <th>Ciudad</th>
    <th>Direccion</th>
    <th>Logo</th>
  </thead>
  <tbody id="tabla">
    {foreach from=$servicios key=filas item=serv}
    <tr>
      {foreach from=$serv key=columnas item=elemento}
      {if $elemento == $serv['logo']}
        <td><img src="{$elemento}" alt="logo" /></td>
      {else}
        <td><span>{$elemento}</span></td>
      {/if}
      {/foreach}
    </tr>
   {/foreach}
  </tbody>
</table>
