<br>
<br>
<div class="main-content">
  <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
                  <br>
                  <div class="row">
                  <div class="col-md-8">
                    <h1>Listado de clientes</h1>

                  </div>
                  <div class="col-md-4">
                    <a href="<?php echo site_url(); ?>/clientes/nuevo" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i>Agregar clientes</a>

                  </div>

                  </div>

                  <?php if ($clientes): ?>
                   <table class="table table-striped table-bordered table-hover">
                     <thead>
                        <tr>
                          <th>ID</th>
                          <th>NOMBRE</th>
                          <th>APELLIDO</th>
                          <th>CEDULA</th>
                          <th>CORREO</th>
                          <th>TELEFONO </th>
                          <th>DOMICILIO</th>
                          <th>LATITUD</th>
                          <th>LONGITUD</th>
                          <th>ACCIONES</th>
                        </tr>
                     </thead>
                     <tbody>
                       <?php foreach ($clientes as $filaTemporal ): ?>
                         <tr>
                             <td class="text-center"> <?php echo $filaTemporal->id_cli ?></td>
                             <td> <?php echo $filaTemporal->nombre_cli ?></td>
                             <td> <?php echo $filaTemporal->apellido_cli ?></td>
                             <td> <?php echo $filaTemporal->cedula_cli ?></td>
                             <td> <?php echo $filaTemporal->correo_cli ?></td>
                             <td> <?php echo $filaTemporal->telefono_cli?></td>
                             <td> <?php echo $filaTemporal->domicilio_cli?></td>
                             <td> <?php echo $filaTemporal->latitud_cli ?></td>
                             <td> <?php echo $filaTemporal->longitud_cli ?></td>
                             <td class="text-center">
                               <a href="<?php echo site_url();?>/clientes/editar/<?php echo $filaTemporal->id_cli; ?>"class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit" aria-describedby="tooltip275420"><i class="fas fa-pencil-alt"></i></a>

                             </td>
                             <td class="text-center" >
                               <a href="<?php echo site_url(); ?>/clientes/eliminar/<?php echo $filaTemporal->id_cli; ?>" class="btn btn-danger btn-action"  title="Borrar Cliente" onclick="return confirm('Esta seguro de borra el registro?');"  ><i class="fas fa-trash"></i></a>

                               </a>
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
