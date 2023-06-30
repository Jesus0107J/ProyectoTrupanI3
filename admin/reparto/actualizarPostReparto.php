<?php
    $idreparto = $_POST["idreparto"];
    $cLatitudReparto = $_POST["cLatitudReparto"];
    $cLongitudReparto = $_POST["cLongitudReparto"];
    $cReferenciaReparto = $_POST["cReferenciaReparto"];
    $cNombreRemitenteReparto = $_POST["cNombreRemitenteReparto"];
    $cNumeroRemitenteReparto = $_POST["cNumeroRemitenteReparto"];
    include '../configDB.php';
    $query = "CALL ActualizarReparto(?, ?, ?, ?, ?, ?)";
    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("isssss", $idreparto, $cLatitudReparto, $cLongitudReparto, $cReferenciaReparto, $cNombreRemitenteReparto, $cNumeroRemitenteReparto);
    $sentencia->execute();
    header("location:/admin/reparto/mostrarReparto.php");
?>