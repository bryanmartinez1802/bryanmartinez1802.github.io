<br>
<br>
<div class="main-content">

  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
       <h1 class="text-center">
        Reporte ubicaciones de pedidos
        </h1>
        <div class="row">
          <div class="col-md-6">
            <h1>Marcador de Ruta de origen</h1>
            <img src="<?php echo base_url("assents/1.png"); ?>" alt="">
          </div>
          <div class="col-md-6">
            <h1>Marcador de Ruta de destino</h1>
            <img src="<?php echo base_url("assents/2.png"); ?>" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12" style="height:500px; width: 100%; border:2px solid black;"  id="mapapre">


          </div>
        </div>




    </div>

  </div>

</div>

<script type="text/javascript">

function initMap(){
const directionsRenderer = new google.maps.DirectionsRenderer();
const directionsService = new google.maps.DirectionsService();
var centro=new google.maps.LatLng(-1.3506502749248492, -78.51431770793688);
var mapadirpre=new google.maps.Map(document.getElementById('mapapre'),
{
  center:centro,
  zoom: 7,
  mapTypeId:google.maps.MapTypeId.HYBRID
}


);

directionsRenderer.setMap(mapadirpre);
calculateAndDisplayRoute(directionsService, directionsRenderer);

<?php if ($pedidos): ?>
  <?php foreach ($pedidos as $lugarTemporal): ?>
    var cordenadaTempora1=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_ped_ori; ?>, <?php echo $lugarTemporal->longitud_ped_ori; ?>);
    var cordenadaTempora2=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_ped_des; ?>, <?php echo $lugarTemporal->longitud_ped_des; ?>);
    var marcador1=new google.maps.Marker(

      {
        position:cordenadaTempora1,
        title:"<?php echo $lugarTemporal->nombre_cli_ped; ?>",
        icon:"<?php echo base_url("assents/1.png"); ?>",
        map:mapadirpre
      }

    );

    var marcador2=new google.maps.Marker(

      {
        position:cordenadaTempora2,
        title:"<?php echo $lugarTemporal->nombre_cli_ped; ?>",
        icon:"<?php echo base_url("assents/2.png"); ?>",
        map:mapadirpre
      }

    );
    var linea=[
      cordenadaTempora1,
      cordenadaTempora2
    ];

    var poligono= new google.maps.Polygon({
					paths:linea,
					strokeColor:"#00ff00",
					strokeOpacity:"0.5",
					strokeWeight:5,
					fillColor:"#0000ff",
					fillOpacity:"0.3"
				});
				poligono.setMap(mapadirpre);
  <?php  endforeach; ?>


<?php endif; ?>




}//funcion initMap

function calculateAndDisplayRoute(directionsService, directionsRenderer) {


  directionsService
    .route({
      origin: { lat: <?php echo $lugarTemporal->latitud_ped_ori;?>, lng: <?php echo $lugarTemporal->longitud_ped_ori;?> },
      destination: { lat: <?php echo $lugarTemporal->latitud_ped_des;?>, lng: <?php echo $lugarTemporal->longitud_ped_des;?> },

      travelMode: google.maps.TravelMode.DRIVING,
    })
    .then((response) => {
      directionsRenderer.setDirections(response);
    })
    .catch((e) => window.alert("Directions request failed due to " + status));
}
window.initMap = initMap;
</script>
