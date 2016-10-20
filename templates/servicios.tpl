
<h2>Servicos recomendados</h2>
<table class="tablaservicio">
  <thead>
    <th>Servicio</th>
    <th>Ciudad</th>
    <th>Nombre</th>
    <th>Telefono</th>
    <th>Direccion</th>
  </thead>
  <tbody id="tabla">
    {foreach from=$servicos key=index item=serv}
      <tr>
        {foreach from=$serv key=index item=elemento}
         <td><span>{$elemento}</span></td>
        {/foreach}
     </tr>
   {/foreach}

  </tbody>
</table>
