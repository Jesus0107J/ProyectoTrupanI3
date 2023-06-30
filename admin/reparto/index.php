<?php 
    include '../headerCliente2.php';
?>

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center bg-secondary text-white">Registro de despacho </h1>
    </div>
</div>

<head>
    <title>Obtener latitud y longitud al seleccionar un punto en el mapa</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMapa" async defer></script>
    <script>
      var map;
      var marker;
      var latInput,lngInput;

      function iniciarMapa() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: { lat: -12.067993725291391, lng: -75.21024870413886 },
          zoom: 15
        });

        latInput = document.getElementById('lat-input');
        lngInput = document.getElementById('lng-input');

        google.maps.event.addListener(map, 'click', function(event) {
          if (marker) {
            marker.setMap(null); // Elimina el marcador anterior si existe
          }

          marker = new google.maps.Marker({
            position: event.latLng,
            map: map
          });

          var latitude = event.latLng.lat();
          var longitude = event.latLng.lng();

          latInput.value = latitude;
          lngInput.value = longitude;

          console.log('Latitud: ' + latitude);
          console.log('Longitud: ' + longitude);
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
        <form action="nuevoPostReparto.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input require class="form-control" id="lat-input"  name="cLatitudReparto" type="hidden" >  
                <input require class="form-control" id="lng-input"  name="cLongitudReparto" type="hidden" >
            </div>
            <div class="form-group">
                <label for="cNombreVariable">Lugar de referencia</label> <br>
                <input require class="form-control" name="cReferenciaReparto" type="text" placeholder="Ingrese una referencia">  
            </div>
            <div class="form-group">
                <label for="cValorVariable">Persona remitente</label> <br>
                <input require class="form-control" name="cNombreRemitenteReparto" type="text" placeholder="Ingrese nombre del remitente">  
            </div>
            <div class="form-group">
                <label for="cDescripcion">Número del remitente</label> <br>
                <input require class="form-control" name="cNumeroRemitenteReparto" type="text" placeholder="Ingrese el número del remitente">  
            </div>
            <hr>
            <div class="form-group" style="float: right">
                <a href="../pedidos/mostrarPedido.php" class="btn btn-warning">Regresar</a>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Aceptar</button> <br><br>
            </div>
        </form>
    </div>
    <div class="col-md-4">  
    </div>  
</div>

<?php
    include '../footerA.php';
?>    