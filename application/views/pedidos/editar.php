<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <br>
        <br>
        <h1 style="middle">Editar Pedido</h1>




        <form action="<?php echo site_url("/pedidos/procesoActualizar");?>" method="post">
          
            <input type="hidden" name="id_ped" id="id_ped" value="<?php echo $pedidoeditar->id_ped ?>" >

            <div class="container">
              <div class="row">
                <div class="col-md-4 text-center ">
                    <label for="">Nombre de cliente:</label>
                    <input type="text" class=form-control value="<?php echo $pedidoeditar->nombre_cli_ped ?>"name="nombre_cli_ped" id="nombre_cli_ped" placeholder="">

                </div>

                <div class="col-md-4 text-center ">
                    <label for="">Apellido del cliente:</label>
                    <input type="text" class=form-control name="apellido_cli_ped" id="apellido_cli_ped"  value="<?php echo $pedidoeditar->apellido_cli_ped ?>" placeholder="">

                </div>

                <div class="col-md-4 text-center ">
                    <label for="">Correo del cliente:</label>
                    <input type="text" class=form-control name="correo_cli_ped" id="correo_cli_ped" value="<?php echo $pedidoeditar->correo_cli_ped ?>" placeholder="">

                </div>


              </div>
            </div>

            <div class="container">
              <div class="row">
                  <div class="col-md-4 text-center ">
                      <label for="">Cedula del Cliente:</label>
                      <input type="text" class=form-control name="cedula_cli_ped" id="cedula_cli_ped" value="<?php echo $pedidoeditar->cedula_cli_ped ?>" placeholder="">

                  </div>

                  <div class="col-md-4 text-center ">
                      <label for="">Descripcion Pedido:</label>
                      <input type="text" class=form-control name="descripcion_ped" id="descripcion_ped" value="<?php echo $pedidoeditar->descripcion_ped ?>" placeholder="Ingrese la descripcio del pedido">

                  </div>
                  <div class="col-md-4 text-center ">
                      <label for="">Peso del Pedido:</label>
                      <input type="text" class=form-control name="peso_ped" id="peso_ped" value="<?php echo $pedidoeditar->peso_ped ?>" placeholder="Ingrese el peso del pedido">

                  </div>


              </div>
              <div class="row">
                <div class="col-md-6 text-center">
                    <label for="">Latitud Pedido Origen:</label>
                    <input type="text" class="form-control" name="latitud_ped_ori" id="latitud_ped_ori" value="<?php echo $pedidoeditar->latitud_ped_ori?>" placeholder="Ingrese  la latitud Origen del pedido" readonly>
                </div>
                <div class="col-md-6 text-center">
                    <label for="">Longitud Pedido Origen:</label>
                    <input type="text" class="form-control" name="longitud_ped_ori" id="longitud_ped_ori" value="<?php echo $pedidoeditar->longitud_ped_ori ?>" placeholder="Ingrese la longitud Origen del pedido" readonly >
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6 text-center">
                      <label for="">Latitud Pedido Destino:</label>
                      <input type="text" class="form-control" name="latitud_ped_des" id="latitud_ped_des" value="<?php echo $pedidoeditar->latitud_ped_des ?>" placeholder="Ingrese  la latitud del Destino pedido" readonly >
                  </div>
                  <div class="col-md-6 text-center">
                      <label for="">Longitud Pedido Destino:</label>
                      <input type="text" class="form-control" name="longitud_ped_des" id="longitud_ped_des" value="<?php echo $pedidoeditar->longitud_ped_des ?>" placeholder="Ingrese la longitud del Destino pedido" readonly >
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
        //icon
        draggable:true
      }
    );
    var marcador2=new google.maps.Marker(
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
