<?php
  include('../../clases/BD.php');
  include('../../clases/Usuario.php');

  $obj_Usuario = new Usuario();
  $total_registros  = $obj_Usuario->totalRegistros();
  $total= $total_registros->total;
  $resultados_por_pagina = 5;



  // Calcula el número total de páginas
$total_paginas = ceil($total / $resultados_por_pagina);

if (isset($_POST['id'])) {
  $desplazamiento = ($_POST['id'] - 1) * $resultados_por_pagina;
    $arr_usuario = $obj_Usuario->buscarTodosUsuarios($desplazamiento, $resultados_por_pagina);
}else{
   $arr_usuario = $obj_Usuario->buscarNombreUsuario(0,5);
}

?>
 <section id="tabla-articulos" class="mt-5 mb-5">
  <div class="container">
    <div class="row mb-5">
        <div class="col">
        <h3>Usuarios</h3>
        </div>

        <div class="col center">
        <button type="button" class="btn btn-primary" id="btn-agregar-usuario">Agregar Usuario</button>
        </div>
        <main>
            <!-- Tabla de los usuarios registrados dentro del sistema del dentista -->
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id del usuario</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Nombre del usuario</th>
                        <th scope="col">Contraseña</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($arr_usuario as $usuario) { ?>
                        <tr>
                            <td><?php echo $usuario['usua_id_usua']; ?></td>
                            <td><?php echo $usuario['usua_id_rol']; ?></td>
                            <td><?php echo $usuario['usua_nombre']; ?></td>
                            <td><?php echo $usuario['usua_contra']; ?></td>
                            <td>
                                <p ><a type="button" class="btn btn-primary btn-table" title="Actualizar" onclick="actualizarUsuario(<?php echo $usuario['usua_id_usua'] ?>)">Editar</a></p>
                                <p><a type="button" class="btn btn-primary btn-table" title="Eliminar" onclick="eliminarUsuario(<?php echo $usuario['usua_id_usua'] ?>, '<?php echo $articulo['usua_nombre'] ?>')">Eliminar</a></p>
                                <p><a type="button" class="btn btn-primary btn-table" title="Actualizar" onclick="consultarUsuario(<?php echo $usuario['usua_id_usua'] ?>)">Detalle</a></p>
                            </td>
                        </tr>
                        <?php } ?>
                    <button type="button" class="btn btn-primary" id="btn-agregar-usuario">Agregar</button>
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
                  <a class="page-link" role="button" onclick="consultarUsuarios(' . $anterior . ')" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>';

         for ($i = 1; $i <= $total_paginas; $i++) {
          
          echo '<li id="'.$i.'" class="page-item';

          if ((!isset($_POST['id']) && $i == 1) || $i == $_POST['id']) {

            echo ' active';

         } 

         echo '"><a class="page-link" role="button" onclick="consultarUsuarios(' . $i . ')">' . $i . '</a></li>';

        }

        echo '<li class="page-item';
        
        
        if ($total_paginas == 1 || $_POST['id'] == $total_paginas) {

          echo ' disabled';
        }
        
        $siguiente = !isset($_POST['id']) ? 2 : $_POST['id'] + 1;

        echo '">
        <a class="page-link" role="button" onclick="consultarUsuarios(' . $siguiente . ')" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
      </ul></nav>';
  ?>
        </main>
        </div>
    </div>  
  </div>
</section>
<script src="../sistema/usuarios/usuarios.js"></script>