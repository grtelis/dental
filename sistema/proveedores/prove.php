<?php
  include('../../clases/BD.php');
  include('../../clases/Proveedor.php');

  $obj_Proveedor = new Proveedor();
  $total_registros = $obj_Proveedor->totalRegistros();
  $total = $total_registros->total;
  $resultados_por_pagina = 5;

  $total_paginas = ceil($total / $resultados_por_pagina);

  if (isset($_POST['id'])) {
    $desplazamiento = ($_POST['id'] - 1) * $resultados_por_pagina;
      $arr_proveedor = $obj_Proveedor->buscarTodos($desplazamiento, $resultados_por_pagina);
  }else{
    $arr_proveedor = $obj_Proveedor->buscarTodos(0,5);
  }
?>
<!-- Tabla de proveedores para el dentista -->
<section class="mt-t mb-5" id="tabla-proveedores">
    <div class="container">
        <div class="row mb-5">
            <div class="col">
                <h3>Proveedores</h3>
            </div>
            <div class="col center">
                <button type="button" class="btn btn-primary" id="btn-registro-proveedor">Agregar Proveedor</button>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Proveedor</th>
                            <th scope="col">Producto/Material</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Nacionalidad</th>
                            <th scope="col">Número de teléfono</th>
                            <th scope="col">Correo Electrónico</th>
                            <th scope="col">Ubicación</th>
                            <th scope="col">Acciones</th>                    
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($arr_proveedor as $proveedor) { ?>
                        <tr>
                            <td><?php echo $proveedor['prove_id_prove']; ?></td>
                            <td><?php echo $proveedor['prove_descrip']; ?></td>
                            <td><?php echo $proveedor['precio']; ?></td>
                            <td><?php echo $proveedor['nacionalidad']; ?></td>
                            <td><?php echo $proveedor['numero_telefono']; ?></td>
                            <td><?php echo $proveedor['correo_electronico']; ?></td>
                            <td><?php echo $proveedor['ubicacion']; ?></td>
                            <td>
                                <button type="button" class="btn btn-secondary" title="Actualizar" onclick="actualizarProveedor(<?php echo $proveedor['prove_id_prove'] ?>)">Editar</button>
                                <button type="button" class="btn btn-danger" title="Eliminar" onclick="eliminarProveedor(<?php echo $proveedor['prove_id_prove'] ?>, '<?php echo $proveedor['prove_descrip'] ?>')">Eliminar</button>
                                <button type="button" class="btn btn-primary" title="Detalle" onclick="consultarProveedor(<?php echo $proveedor['prove_id_prove'] ?>)">Detalle</button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php
         
         echo '<nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item';
          if (!isset($_POST['id']) || $_POST['id'] == 1) {
  
            echo  ' disabled';
  
          }

          $anterior = !isset($_POST['id']) ? 1 : $_POST['id'] - 1;

          echo '">
                  <a class="page-link" role="button" onclick="consultarArticulos(' . $anterior . ')" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>';

         for ($i = 1; $i <= $total_paginas; $i++) {
          
          echo '<li id="'.$i.'" class="page-item';

          if ((!isset($_POST['id']) && $i == 1) || $i == $_POST['id']) {

            echo ' active';

         } 

         echo '"><a class="page-link" role="button" onclick="consultarArticulos(' . $i . ')">' . $i . '</a></li>';

        }

        echo '<li class="page-item';
        
        
        if ($total_paginas == 1 || $_POST['id'] == $total_paginas) {

          echo ' disabled';
        }
        
        $siguiente = !isset($_POST['id']) ? 2 : $_POST['id'] + 1;

        echo '">
        <a class="page-link" role="button" onclick="consultarArticulos(' . $siguiente . ')" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
      </ul></nav>';
  ?>
            </div>
        </div>
    </div>
</section>
<script src="../sistema/proveedores/proveedores.js"></script>