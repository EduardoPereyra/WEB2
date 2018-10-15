<div class="table-categorias">
  <table>
    <thead>
      <tr>
        <th scope="col">Id de Categoria</th>
        <th scope="col">Tipo de Producto</th>
        <th scope="col">Ver</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        {foreach from=$Categorias item=categoria}
          <td>{$categoria['id_categoria']}</td>
          <td>{$categoria['tipo_producto']}</td>
          <td><a href="vercategoria/{$categoria['id_categoria']}">Ver Categoria</a></td>
    </tr>
        {/foreach}
    </tbody>
  </table>
</div>
<br>
<div class="table-productos">
  <table>
    <thead>
      <tr>
        <th scope="col">Producto</th>
        <th scope="col">Precio</th>
        <th scope="col">Id de Categoria</th>
        <th scope="col">Ver</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        {foreach from=$Productos item=producto}
          <td>{$producto['producto']}</td>
          <td>$ {$producto['precio']}</td>
          <td>{$producto['id_categoria']}</td>
          <td><a href="verproducto/{$producto['id_producto']}">Ver Producto</a></td>
    </tr>
        {/foreach}
    </tbody>
  </table>
</div>
