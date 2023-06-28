<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <br>
        <br>
        <h1 style="middle">Nuevo Pedido</h1>


        <form action="<?php echo site_url("/pedidos/guardar");?>" method="post">
            <input  type="hidden" name="id_cli" id="id_cli" value="<?php echo $clientespedido->id_cli ?>">
            <div class="container">
              <div class="row">
                <div class="col-md-4 text-center ">
                    <label for="">Nombre de cliente:</label>
                    <input type="text" class=form-control name="nombre_cli_ped" id="nombre_cli_ped" placeholder="" value="<?php echo $clientespedido->nombre_cli ?>" readonly>

                </div>

                <div class="col-md-4 text-center ">
                    <label for="">Apellido del cliente:</label>
                    <input type="text" class=form-control name="apellido_cli_ped" id="apellido_cli_ped" placeholder="" value="<?php echo $clientespedido->apellido_cli ?>" readonly>

                </div>

                <div class="col-md-4 text-center ">
                    <label for="">Email del cliente:</label>
                    <input type="text" class=form-control name="correo_cli_ped" id="correo_cli_ped" placeholder="" value="<?php echo $clientespedido->correo_cli ?>" readonly>

                </div>


              </div>
            </div>

            <div class="container">
              <div class="row">
                  <div class="col-md-4 text-center ">
                      <label for="">Cedula del Cliente:</label>
                      <input type="text" class=form-control name="cedula_cli_ped" id="cedula_cli_ped" placeholder="" value="<?php echo $clientespedido->cedula_cli ?>" readonly>

                  </div>

                  <div class="col-md-4 text-center ">
                      <label for="">Descripcion Pedido:</label>
                      <input type="text" class=form-control name="descripcion_ped" id="descripcion_ped" placeholder="Ingrese la descripcio del pedido">

                  </div>
                  <div class="col-md-4 text-center ">
                      <label for="">Peso del Pedido:</label>
                      <input type="text" class=form-control name="peso_ped" id="peso_ped" placeholder="Ingrese el peso del pedido">

                  </div>


              </div>
              <div class="row">
                <div class="col-md-6 text-center">
                    <label for="">Latitud Pedido Origen:</label>
                    <input type="text" class="form-control" name="latitud_ped_ori" id="latitud_ped_ori" placeholder="Ingrese  la latitud Origen del pedido" readonly>
                </div>
                <div class="col-md-6 text-center">
                    <label for="">Longitud Pedido Origen:</label>
                    <input type="text" class="form-control" name="longitud_ped_ori" id="longitud_ped_ori" placeholder="Ingrese la longitud Origen del pedido" readonly >
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6 text-center">
                      <label for="">Latitud Pedido Destino:</label>
                      <input type="text" class="form-control" name="latitud_ped_des" id="latitud_ped_des" placeholder="Ingrese  la latitud del Destino pedido" readonly >
                  </div>
                  <div class="col-md-6 text-center">
                      <label for="">Longitud Pedido Destino:</label>
                      <input type="text" class="form-control" name="longitud_ped_des" id="longitud_ped_des" placeholder="Ingrese la longitud del Destino pedido" readonly >
                  </div>
              </div>
              <div class="row text-center">
                <div class="col-md-6 text-center">
                  <label for="">Codigo del pedido</label>
                  <input type="number" name="idcli" id="idcli" value="<?php echo $clientespedido->id_cli ?>" class="form-control" readonly>
                </div>
              </div>


            </div>
            <br>
            <br>
            <div class="container text-center">
              <div class="row">
                  <div class="col-md-12">

                      <button type="submit" name="button" class="btn btn-primary">Guardar</button>&nbsp;
                      <a href="<?php echo site_url(); ?>/pedidos/listado" class="btn btn-danger">Cancelar </a>
                  </div>
              </div>


            </div>
        </form>

      </div>

    </div>

  </section>

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
    var centro2= new google.maps.LatLng(-2.117958490238994, -0.4045704484452382);
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
        icon:"<?php base_url("/assents/1.png"); ?>",
        draggable:true
      }
    );
    var marcador2=new google.maps.Marker(
      {
        position:centro,
        map:mapa1,
        tittle:"Seleccione la direccion",
        icon:"<?php base_url("/assents/2.png"); ?>",
        draggable:true
      }
    );
    google.maps.event.addListener(marcador,'dragend',function()
      {
        //alert("Se termino el Drag");
        document.getElementById('latitud_ped_ori').value=this.getPosition().lat();
        document.getElementById('longitud_ped_ori').value=this.getPosition().lng();

      }
    );
    google.maps.event.addListener(marcador2,'dragend',function()
      {
        //alert("Se termino el Drag");
        document.getElementById('latitud_ped_des').value=this.getPosition().lat();
        document.getElementById('longitud_ped_des').value=this.getPosition().lng();

      }
    );





  }

</script>
