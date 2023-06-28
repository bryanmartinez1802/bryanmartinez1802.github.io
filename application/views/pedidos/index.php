<br>
<br>
<div class="main-content">
  <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
                  <br>
                  <div class="row">
                  <div class="col-md-8">
                    <h1>Listado de clientes registrados para asignar pedido</h1>

                  </div>
                  <div class="col-md-4">
                    <a href="<?php echo site_url(); ?>/clientes/nuevo" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i>Agregar clientes</a>

                  </div>

                  </div>

                  <?php if ($cliente): ?>
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

                          <th>ACCIONES</th>
                        </tr>
                     </thead>
                     <tbody>
                       <?php foreach ($cliente as $filaTemporal ): ?>
                         <tr>
                             <td class="text-center"> <?php echo $filaTemporal->id_cli ?></td>
                             <td> <?php echo $filaTemporal->nombre_cli ?></td>
                             <td> <?php echo $filaTemporal->apellido_cli ?></td>
                             <td> <?php echo $filaTemporal->cedula_cli ?></td>
                             <td> <?php echo $filaTemporal->correo_cli ?></td>
                             <td> <?php echo $filaTemporal->telefono_cli?></td>
                             <td> <?php echo $filaTemporal->domicilio_cli?></td>

                             <td class="text-center">
                               <a href="<?php echo site_url();?>/pedidos/nuevo/<?php echo $filaTemporal->id_cli; ?>">Agregar Pedido </a>

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
