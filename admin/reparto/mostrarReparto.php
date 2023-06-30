<?php 
    include '../headerCliente2.php';
?>

<?php 
    include 'controladorMostrarReparto.php';
?>

<div class="row">
    <div class="col-md-12">
        <h1 class="text-center bg-secondary text-white">Registro de despacho </h1>
    </div>
</div>

<head>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMapa" async defer></script>
    <script>
      var map;
      var marker;
      var latInput,lngInput;

      function iniciarMapa() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: { lat: <?php echo $cLatitudReparto?>, lng: <?php echo $cLongitudReparto?> },
          zoom: 18
        });
        marker = new google.maps.Marker({
            position: { lat: <?php echo $cLatitudReparto?>, lng: <?php echo $cLongitudReparto?> },
            map: map
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
      <form method="POST" enctype="multipart/form-data">
            <input type="hidden" value=<?php echo $idreparto?> name="idreparto">
            <div class="form-group">
                <br>
                <input require class="form-control"  name="cReferenciaReparto" type="text" 
                placeholder="Ingrese el nombre del servicio" value="<?php echo $cReferenciaReparto?>">  
            </div>
            <div class="form-group">
                <br>
                <input require class="form-control" name="cNombreRemitenteReparto" type="text" 
                placeholder="Ingrese la descripción del servicio" value="<?php echo $cNombreRemitenteReparto?>">  
            </div>
            <div class="form-group">
                <br>
                <input require class="form-control" name="cNumeroRemitenteReparto" type="text" 
                placeholder="Ingrese el precio del servicio" value="<?php echo $cNumeroRemitenteReparto?>">  
            </div>
            <hr>
            <div class="form-group" style="float: right">
                <a href="../../indexCliente.php" class="btn btn-warning">Regresar</a>
            </div>
            <div class="form-group">
            <a href="actualizarReparto.php" class="btn btn-secondary">Actualizar</a> <br><br><br><br><br>
            </div>
        </form>
    </div>
    <div class="col-md-4">  
    </div>  
</div>

<?php
    include '../footerA.php';
?>    