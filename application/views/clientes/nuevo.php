

<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <br>
        <br>
        <h1>Nuevo Cliente</h1>


          <form action="<?php echo site_url("/clientes/guardar");?>" method="post">
                <div class="container">
                  <div class="row">
                      <div class="col-md-4 text-center ">
                          <label for="">Nombre</label>
                          <input type="text" class="form-control" name="nombre_cli" id="nombre_cli" placeholder="Ingrese el Nombre del  cliente">
                      </div>
                      <div class="col-md-4 text-center">
                          <label for="">Apellido</label>
                          <input type="text" class="form-control"  name="apellido_cli" id=apellido_cli placeholder="Ingrese el apellido del  cliente">
                      </div>

                      <div class="col-md-4 text-center">
                        <label for="">Cedula</label>
                        <input type="number" class="form-control" name="cedula_cli" id="cedula_cli" placeholder="Ingrese la cedula del  cliente"

                      </div>
                  </div>
                </div>

                <div class="container">
                  <div class="row">
                      <div class="col-md-4 text-center " >
                        <label for="">Telefono</label>
                        <input type="number" class="form-control" name="telefono_cli" id="telefono_cli" placeholder="Ingrese el Telefono del  cliente">
                      </div>
                      <div class="col-md-4 text-center">
                        <label for="">  Domicilio </label>
                        <input type="text" class="form-control" name="domicilio_cli" id="domicilio_cli" placeholder="Ingrese el domicilio del  cliente" >
                      </div>
                      <div class="col-md-4 text-center">
                        <label for="">Correo</label>
                        <input type="text" class="form-control"name="correo_cli" id="correo_cli" value="" placeholder="Ingrese el correo del cliente">
                      </div>
                  </div>


                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 text-center">
                      <label for="">Direccion Latitud</label>
                      <input type="text" class="form-control" name="latitud_cli" id="latitud_cli" placeholder="Ingrese  la latitud del cliente" readonly >
                    </div>
                      <div class="col-md-6 text-center">
                          <label for="">Direccion Longitud</label>
                          <input type="text" class="form-control" name="longitud_cli" id="longitud_cli" placeholder="Ingrese la longitud del  cliente" readonly>
                      </div>
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
                        <a href="<?php echo site_url(); ?>/clientes/listado" class="btn btn-danger">Cancelar </a>
                    </div>
                </div>


              </div>
          </form>
        </div>



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
        document.getElementById('latitud_cli').value=this.getPosition().lat();
        document.getElementById('longitud_cli').value=this.getPosition().lng();

      }
    );






  }

</script>
