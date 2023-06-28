<br>
<br>
<div class="main-content">
  <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
                  <br>
                  <div class="row">
                  <div class="col-md-8">
                    <h1>Listado de pedidos</h1>

                  </div>
                  <div class="col-md-4">
                    <a href="<?php echo site_url(); ?>/pedidos/index" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i>Agregar Nuevo Pedido</a>

                  </div>

                  </div>

                  <?php if ($pedidos): ?>
                   <table class="table table-striped table-bordered table-hover">
                     <thead>
                        <tr>
                          <th>ID</th>
                          <th>NOMBRE</th>
                          <th>APELLIDO</th>
                          <th>CEDULA</th>
                          <th>CORREO</th>
                          <th>DESCRIPCION</th>
                          <th>PESO</th>
                          <th>LATITUD ORIGEN</th>
                          <th>LONGITUD ORIGEN</th>
                          <th>LONGITUD DESTINO</th>
                          <th>LONGITUD DESTINO</th>
                          <th>ACCIONES</th>
                        </tr>
                     </thead>
                     <tbody>
                       <?php foreach ($pedidos as $filaTemporal ): ?>
                         <tr>
                             <td class="text-center"> <?php echo $filaTemporal->id_ped ?></td>
                             <td> <?php echo $filaTemporal->nombre_cli_ped ?></td>
                             <td> <?php echo $filaTemporal->apellido_cli_ped ?></td>
                             <td> <?php echo $filaTemporal->cedula_cli_ped ?></td>
                             <td> <?php echo $filaTemporal->correo_cli_ped ?></td>
                             <td> <?php echo $filaTemporal->descripcion_ped ?></td>
                             <td> <?php echo $filaTemporal->peso_ped ?></td>
                             <td> <?php echo $filaTemporal->latitud_ped_ori ?></td>
                             <td> <?php echo $filaTemporal->longitud_ped_ori ?></td>
                             <td> <?php echo $filaTemporal->latitud_ped_des ?></td>
                             <td> <?php echo $filaTemporal->longitud_ped_des ?></td>
                             <td class="text-center">
                               <a href="<?php echo site_url();?>/pedidos/editar/<?php echo $filaTemporal->id_ped; ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit" aria-describedby="tooltip275420"><i class="fas fa-pencil-alt"></i></a>
                              &nbsp;&nbsp;
                             </td>
                             <td class="text-center" >
                               <a href="<?php echo site_url(); ?>/pedidos/eliminar/<?php echo $filaTemporal->id_ped; ?>" class="btn btn-danger btn-action trigger--fire-modal-1" data-toggle="tooltip" title="" data-confirm="Esta Seguro de borrar este registro" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>

                             </td>

                         </tr>

                       <?php endforeach; ?>
                     </tbody>
                   </table>
                  <?php else: ?>
                  <h1>No hay datos</h1>
                  <?php endif; ?>



      </div>
  </div>

</div>
