<?php 
    include '../headerCliente2.php';
?>

<?php 
    include 'controladorMostrarReparto.php';
?>

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center bg-secondary text-white">Actualizar reparto</h1>
    </div>
</div>

<head>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMapa" async defer></script>
    <script>
      var map;
      var marker;
      var latInputA,lngInputA;

      function iniciarMapa() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: { lat: <?php echo $cLatitudReparto?>, lng: <?php echo $cLongitudReparto?> },
          zoom: 18
        });
        marker = new google.maps.Marker({
            position: { lat: <?php echo $cLatitudReparto?>, lng: <?php echo $cLongitudReparto?> },
            map: map
          });

          
        latInputA = document.getElementById('lat-inputA');
        lngInputA = document.getElementById('lng-inputA');

        google.maps.event.addListener(map, 'click', function(event) {
          if (marker) {
            marker.setMap(null); // Elimina el marcador anterior si existe
          }

          marker = new google.maps.Marker({
            position: event.latLng,
            map: map
          });

          var latitudeA = event.latLng.lat();
          var longitudeA = event.latLng.lng();

          latInputA.value = latitudeA;
          lngInputA.value = longitudeA;

          console.log('Latitud: ' + latitudeA);
          console.log('Longitud: ' + longitudeA);
        });
      }
    </script>
    <style>
      #map {
        margin-bottom: 20px;
        height: 400px;
        width: 100%;
      }
    </style>
  </head>

  <body>
    <h1 style="font-size: 20px;" class="text-center">Selecciona un punto de entrega</h1>
    <div id="map"></div>
  </body>

<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <form action="actualizarPostReparto.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" value=<?php echo $idreparto?> name="idreparto">
            <div class="form-group">
                <input require class="form-control" id="lat-inputA"  name="cLatitudReparto" type="hidden" >  
                <input require class="form-control" id="lng-inputA"  name="cLongitudReparto" type="hidden" >
            </div>
            <div class="form-group">
                <label for="cNombreVariable">Lugar de referencia</label> <br>
                <input require class="form-control"  name="cReferenciaReparto" type="text" 
                placeholder="Ingrese el nombre del servicio" value="<?php echo $cReferenciaReparto?>">  
            </div>
            <div class="form-group">
                <label for="cValorVariable">Persona remitente</label> <br>
                <input require class="form-control" name="cNombreRemitenteReparto" type="text" 
                placeholder="Ingrese la descripción del servicio" value="<?php echo $cNombreRemitenteReparto?>">  
            </div>
            <div class="form-group">
                <label for="cDescripcion">Número del remitente</label> <br>
                <input require class="form-control" name="cNumeroRemitenteReparto" type="text" 
                placeholder="Ingrese el precio del servicio" value="<?php echo $cNumeroRemitenteReparto?>">  
            </div>
            <hr>
            <div class="form-group" style="float: right">
                <a href="mostrarCliente.php" class="btn btn-warning">Regresar</a>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button> <br><br><br><br><br>
            </div>
        </form>
    </div>
    <div class="col-md-4">  
    </div>  
</div>

<?php
    include '../footerA.php';
?>    