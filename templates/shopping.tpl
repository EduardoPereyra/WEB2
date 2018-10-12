<div class="table-personajes">
  <table>
    <thead>
      <tr>
        <th scope="col">Id_categoria</th>
        <th scope="col">Tipo_producto</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        {foreach from=$Categorias item=categoria}
          <td>{$categoria['id_categoria']}</td>
          <td>{$categoria['tipo_producto']}</td>
    </tr>
        {/foreach}
    </tbody>
  </table>
</div>
<br>
<div class="table-personajes">
  <table>
    <thead>
      <tr>
        <th scope="col">Id_producto</th>
        <th scope="col">Producto</th>
        <th scope="col">Precio</th>
        <th scope="col">Id_categoria</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        {foreach from=$Productos item=producto}
          <td>{$producto['id_producto']}</td>
          <td>{$producto['producto']}</td>
          <td>{$producto['precio']}</td>
          <td>{$producto['id_categoria']}</td>
    </tr>
        {/foreach}
    </tbody>
  </table>
</div>
