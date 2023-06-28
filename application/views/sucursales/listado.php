<br>
<br>
<div class="main-content">
  <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
                  <br>
                  <div class="row">
                  <div class="col-md-8">
                    <h1>Listado de sucursales</h1>

                  </div>
                  <div class="col-md-4">
                    <a href="<?php echo site_url(); ?>/sucursales/nuevo" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i>Agregar Sucursal</a>

                  </div>

                  </div>

                  <?php if ($sucursales): ?>
                   <table class="table table-striped table-bordered table-hover">
                     <thead>
                        <tr>
                          <th>ID</th>
                          <th>TELEFONO </th>
                          <th>DIRECCION</th>
                          <th>LATITUD</th>
                          <th>LONGITUD</th>
                          <th>ACCIONES</th>
                        </tr>
                     </thead>
                     <tbody>
                       <?php foreach ($sucursales as $filaTemporal ): ?>
                         <tr>
                             <td class="text-center"> <?php echo $filaTemporal->id_suc ?></td>
                             <td> <?php echo $filaTemporal->telefono_suc ?></td>
                             <td> <?php echo $filaTemporal->direccion_suc ?></td>
                             <td> <?php echo $filaTemporal->latitud_suc ?></td>
                             <td> <?php echo $filaTemporal->longitud_suc ?></td>
                             <td class="text-center">
                               <a href="<?php echo site_url("/sucursales/editar"); ?>"class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit" aria-describedby="tooltip275420"><i class="fas fa-pencil-alt"></i></a>
                              &nbsp;&nbsp;
                             </td>
                             <td class="text-center" >
                               <a href="<?php echo site_url(); ?>/sucursales/eliminar/<?php echo $filaTemporal->id_suc; ?>" class="btn btn-danger btn-action trigger--fire-modal-1" data-toggle="tooltip" title="" data-confirm="Esta Seguro de borrar este registro" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>

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
