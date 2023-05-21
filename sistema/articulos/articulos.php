 <?php
  include('../../clases/BD.php');
  include('../../clases/Articulo.php');

  $obj_Articulo = new Articulo();
  $total_registros  = $obj_Articulo->totalRegistros();
  $total= $total_registros->total;
  $resultados_por_pagina = 5;



  // Calcula el número total de páginas
$total_paginas = ceil($total / $resultados_por_pagina);






if (isset($_POST['id'])) {
  $desplazamiento = ($_POST['id'] - 1) * $resultados_por_pagina;
    $arr_articulo = $obj_Articulo->buscarTodos($desplazamiento, $resultados_por_pagina);
}else{
   $arr_articulo = $obj_Articulo->buscarTodos(0,5);
}



?>

 <section id="tabla-articulos" class="mt-5 mb-5">
  <div class="container">
    <div class="row mb-5">
      <div class="col">
        <h3>Artículos Dentales</h3>
      </div>

      <div class="col center">
        <button type="button" class="btn btn-primary" id="btn-registro-articulo">Agregar Artículo</button>
      </div>
      
      <div class="table-responsive">
          <table class="table">
              <thead class="table-light">
                <tr>
                  <td><b>#Id</b></td>
                  <td><b>Nombre del artículo</b></td>
                  <td><b>Descripción</b></td>
                  <td><b>Tipo de material</b></td>
                  <td><b>Proveedor</b></td>
                  <td><b>Fecha de registro</b></td>
                  <td><b>Origen</b></td>
                  <td><b>Opciones</b></td>
                </tr>
              </thead>
              <tbody>

              	<?php foreach ($arr_articulo as $articulo) { ?>
                <tr>
	                 <td><?php echo $articulo['arti_id_articulo']; ?></td>
	                 <td><?php echo $articulo['arti_nombre']; ?></td>
	                 <td><?php echo $articulo['arti_descrip']; ?></td>
	                 <td><?php echo $articulo['mate_descrip']; ?></td>
	                 <td><?php echo $articulo['prove_descrip']; ?></td>
	                 <td><?php echo $articulo['arti_fecha']; ?></td>
	                 <td><?php echo $articulo['arti_nacionalidad']; ?></td>
	                  <td>
	                    <p ><a type="button" class="btn btn-primary btn-table" title="Actualizar" onclick="actualizarArticulo(<?php echo $articulo['arti_id_articulo'] ?>)">Editar</a></p>
	                    <p><a type="button" class="btn btn-primary btn-table" title="Eliminar" onclick="eliminarArticulo(<?php echo $articulo['arti_id_articulo'] ?>, '<?php echo $articulo['arti_nombre'] ?>')">Eliminar</a></p>
	                    <p><a type="button" class="btn btn-primary btn-table" title="Actualizar" onclick="consultarArticulo(<?php echo $articulo['arti_id_articulo'] ?>)">Detalle</a></p>
	                  </td>
                </tr>
                <?php } ?>
              </tbody>

     
          </table>
      </div>
    </div>  
  </div>

           <?php
         
         echo '<nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item';
          if (!isset($_POST['id'])) {
  
            echo  ' disabled';
                  //   <a class="page-link" href="#" aria-label="Previous">
                  //     <span aria-hidden="true">&laquo;</span>
                  //   </a>
                  // </li>
                  // <li class="page-item active">
                  //   <a class="page-link">' . 1 . '</a>
                  // </li>';
  
          }

          echo '">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>';

         for ($i = 1; $i <= $total_paginas; $i++) {
          
          echo '"<li id="'.$i.'" class="page-item';

          if (!isset($_POST['id']) && $i == 1) {

            
  
            echo ' active';

         } else if ($i == $_POST['id']) {
          
            echo ' active';

         }

         echo '"><a class="page-link" onclick="consultarArticulos(' . $i . ')">' . $i . '</a></li>';

        }

        echo '<li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
        </ul></nav>';

         
       

          // for ($i = 1; $i <= $total_paginas; $i++) {
          //   echo '<li class="page-item';
          //   if ($i == $_POST['id']) {
          //     echo ' active';
          //   }
          //   echo '"><a class="page-link" onclick="consultarArticulos(' . $i . ')">' . $i . '</a></li>';
          // }
        //   echo '<li class="page-item">
        //   <a class="page-link" href="#" aria-label="Next">
        //     <span aria-hidden="true">&raquo;</span>
        //   </a>
        // </li>';

          // echo '';


?>
</section>
<script src="../sistema/articulos/articulos.js"></script>