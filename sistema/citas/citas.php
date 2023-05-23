<?php
  include('../../clases/BD.php');
  include('../../clases/Citas.php');

  $obj_Cita = new Citas();
  $total_registros  = $obj_Cita->totalRegistros();
  $total= $total_registros->total;
  $resultados_por_pagina = 5;



  // Calcula el número total de páginas
$total_paginas = ceil($total / $resultados_por_pagina);

if (isset($_POST['id'])) {
  $desplazamiento = ($_POST['id'] - 1) * $resultados_por_pagina;
    $arr_cita = $obj_Cita->buscarTodos($desplazamiento, $resultados_por_pagina);
}else{
   $arr_cita = $obj_Cita->buscarTodos(0,5);
}

?>

 <section id="tabla-citas" class="mt-5 mb-5">
  <div class="container">
    <div class="row mb-5">
      <div class="col">
        <h3>Citas</h3>
      </div>

      <div class="col center">
        <button type="button" class="btn btn-primary" id="btn-registro-citas">Agregar Cita</button>
      </div>
      
      <div class="table-responsive">
          <table class="table">
              <thead class="table-light">
                <tr>
                  <td><b>#Id</b></td>
                  <td><b>Nombre del paciente</b></td>
                  <td><b>Fecha de la cita</b></td>
                  <td><b>Hora de la cita</b></td>
                  <td><b>Motivo de la cita</b></td>
                </tr>
              </thead>
              <tbody>

              	<?php foreach ($arr_cita as $citas) { ?>
                <tr>
	                 <td><?php echo $citas['id']; ?></td>
	                 <td><?php echo $citas['nombrepa']; ?></td>
	                 <td><?php echo $citas['fechacita']; ?></td>
	                 <td><?php echo $citas['horacita']; ?></td>
                     <td><?php echo $citas['motivocita']; ?></td>
	                  <td>
	                    <p ><a type="button" class="btn btn-primary btn-table" title="Actualizar" onclick="actualizarCita(<?php echo $citas['id'] ?>)">Editar</a></p>
	                    <p><a type="button" class="btn btn-primary btn-table" title="Eliminar" onclick="eliminarCita(<?php echo $citas['id'] ?>, '<?php echo $citas['fechacita'] ?>')">Eliminar</a></p>
	                    <p><a type="button" class="btn btn-primary btn-table" title="Actualizar" onclick="consultarCita(<?php echo $citas['id'] ?>)">Detalle</a></p>
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
                  <a class="page-link" role="button" onclick="consultarmobiliarios(' . $anterior . ')" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>';

         for ($i = 1; $i <= $total_paginas; $i++) {
          
          echo '<li id="'.$i.'" class="page-item';

          if ((!isset($_POST['id']) && $i == 1) || $i == $_POST['id']) {

            echo ' active';

         } 

         echo '"><a class="page-link" role="button" onclick="consultarmobiliarios(' . $i . ')">' . $i . '</a></li>';

        }

        echo '<li class="page-item';
        
        
        if ($total_paginas == 1 || $_POST['id'] == $total_paginas) {

          echo ' disabled';
        }
        
        $siguiente = !isset($_POST['id']) ? 2 : $_POST['id'] + 1;

        echo '">
        <a class="page-link" role="button" onclick="consultarmobiliarios(' . $siguiente . ')" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
      </ul></nav>';
  ?>
      </div>
    </div>  
  </div>
</section>
<script src="../sistema/citas/citas.js"></script>