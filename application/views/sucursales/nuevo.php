

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <br>
        <br>
        <h1>Nueva Sucursal</h1>
        <form action="<?php echo site_url("/sucursales/guardar");?>" method="post">

            <div class="container">
              <div class="row">
                  <div class="col-md-4 text-center ">
                      <label for="">Telefono</label>
                      <input type="number" class=form-control name="telefono_suc" id="telefono_suc" placeholder="Ingrese el Telefono de la Sucursal"

                  </div>

              </div>
            </div>

            <div class="container">
              <div class="row">
                  <div class="col-md-4 text-center " >
                      <label for="">  Direccion Sucursal: </label>
                      <input type="text" class="form-control" name="direccion_suc" id="direccion_suc" placeholder="Ingrese la direccion de la sucursal" >
                  </div>
                  <div class="col-md-4 text-center">
                      <label for="">Latitud Sucursal:</label>
                      <input type="text" class="form-control" name="latitud_suc" id="latitud_suc" placeholder="Ingrese  la latitud de la sucursal" >
                  </div>
                  <div class="col-md-4 text-center">
                      <label for="">Longitud Sucursal:</label>
                      <input type="text" class="form-control" name="longitud_suc" id="longitud_suc" placeholder="Ingrese la longitud de la sucursal" >
                  </div>
              </div>

            </div>
            <br>
            <br>
            <br>
            <div class="container text-center">
              <div class="row">
                  <div class="col-md-12">

                      <button type="submit" name="button" class="btn btn-primary">Guardar</button>&nbsp;
                      <a href="<?php echo site_url(); ?>/sucursales/listado" class="btn btn-danger">Cancelar </a>
                  </div>
              </div>


            </div>
        </form>

      </div>

    </div>

  </section>

<br>
<br>
<br>
  <div class="row">
    <div class="col-md-12" style="height:500px; width: 100%; border:2px solid black;"  id="mapaUbicacion">
    </div>
  </div>

</div>



<script type="text/javascript">
  function initMap(){

    var centro=new google.maps.LatLng(-0.9318764731296647, -78.62106929972192);
    var mapa1=new google.maps.Map(
      document.getElementById('mapaUbicacion'),
      {
        center:centro,
        zoom:5,
        mapTypeId:google.maps.MapTypeId.ROADMAP

      }

    );

    var marcador=new google.maps.Marker(
      {
        position:centro,
        map:mapa1,
        tittle:"Seleccione la direccion",
        //icon
        draggable:true
      }
    );
    google.maps.event.addListener(marcador,'dragend',function()
      {
        //alert("Se termino el Drag");
        document.getElementById('latitud_suc').value=this.getPosition().lat();
        document.getElementById('longitud_suc').value=this.getPosition().lng();

      }
    );






  }

</script>
