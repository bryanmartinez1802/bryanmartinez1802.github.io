<br>
<br>
<div class="main-content">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
       <h1 class="text-center">
        Reporte General de Fedex
        </h1>
        <div class="row">
          <div class="col-md-12" style="height:500px; width: 100%; border:2px solid black;"  id="mapapre">


          </div>
        </div>



    </div>

  </div>

</div>

<script type="text/javascript">

function initMap(){

var centro=new google.maps.LatLng(-1.3506502749248492, -78.51431770793688);
var mapadirpre=new google.maps.Map(document.getElementById('mapapre'),
{
  center:centro,
  zoom: 7,
  mapTypeId:google.maps.MapTypeId.HYBRID
}


);


<?php if ($pedidos && $clientes && $sucursales ): ?>
  <?php foreach ($pedidos as $lugarTemporal): ?>
    var cordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_ped_ori; ?>, <?php echo $lugarTemporal->longitud_ped_ori; ?>);

    var marcador=new google.maps.Marker(

      {
        position:cordenadaTemporal,
        title:"<?php echo $lugarTemporal->nombre_cli_ped; ?>",
        icon:"<?php echo base_url("assents/2.png"); ?>",
        map:mapadirpre
      }

    );

  <?php  endforeach; ?>

  <?php foreach ($sucursales as $lugarTemporal): ?>
    var cordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_suc; ?>, <?php echo $lugarTemporal->longitud_suc; ?>);

    var marcador=new google.maps.Marker(

      {
        position:cordenadaTemporal,
        title:"<?php echo $lugarTemporal->direccion_suc; ?>",
        icon:"<?php echo base_url("/assents/3.png"); ?>",
        map:mapadirpre
      }

    );

  <?php  endforeach; ?>
  <?php foreach ($clientes as $lugarTemporal): ?>
    var cordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_cli; ?>, <?php echo $lugarTemporal->longitud_cli; ?>);

    var marcador=new google.maps.Marker(

      {
        position:cordenadaTemporal,
        title:"<?php echo $lugarTemporal->nombre_cli; ?>,<?php echo $lugarTemporal->apellido_cli; ?>",
        icon:"<?php echo base_url("assents/1.png"); ?>",
        map:mapadirpre
      }

    );

  <?php  endforeach; ?>


<?php endif; ?>




}

</script>
