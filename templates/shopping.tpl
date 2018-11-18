<form method="post" class="form-inline my-2 my-lg-0" action="vertablaordenada">
  <button class="logout login btn btn-outline-success my-2 my-sm-0">Ver Tabla Ordenada</button>
</form>
<div class="">
  <div class="table-personajes table-catadm">
    <table>
      <thead>
        <tr>
          <th scope="col">Tipo de Producto</th>
          <th scope="col">Producto</th>
          <th scope="col">Ver</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          {foreach from=$Tabla item=fila}
          <td>{$fila['categoria']}</td>
          <td>{$fila['producto']}</td>
          <td><a href="verproducto/{$fila['id_producto']}">Ver</a></td>
        </tr>
        {/foreach}
      </tbody>
    </table>
    </div>
    <div class="table-personajes table-prodadm">
      <table>
        <thead>
          <tr>
            <th scope="col">Id Categoria</th>
            <th scope="col">Tipo de Producto</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            {foreach from=$Tabla item=categoria}
            <td>{$categoria['id_categoria']}</td>
            <td>{$categoria['categoria']}</td>
          </tr>
          {/foreach}
        </tbody>
      </table>
    </div>
</div>
