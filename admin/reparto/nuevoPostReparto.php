<?php
    $cLatitudReparto= $_POST["cLatitudReparto"];
    $cLongitudReparto = $_POST["cLongitudReparto"];
    $cReferenciaReparto = $_POST["cReferenciaReparto"];
    $cNombreRemitenteReparto = $_POST["cNombreRemitenteReparto"];
    $cNumeroRemitenteReparto = $_POST["cNumeroRemitenteReparto"];
    include '../configDB.php';
    $query = "CALL InsertarReparto(?, ?, ?, ?, ?)";
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("sssss", $cLatitudReparto, $cLongitudReparto, $cReferenciaReparto, $cNombreRemitenteReparto, $cNumeroRemitenteReparto);
    $sentencia->execute();
    header("location:/indexCliente.php");
?>