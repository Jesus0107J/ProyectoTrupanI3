<?php
    include '../configDB.php';
    $datos="";
    $query = "CALL MostrarRepartos();";
    $sentencia = $conn->prepare($query);
    $sentencia->execute();
    $result = $sentencia->get_result();

    $cLatitudReparto = "";
    $cLongitudReparto = "";
    $cReferenciaReparto = "";
    $cNombreRemitenteReparto = "";
    $cNumeroRemitenteReparto = "";

    while ($resultA = $result->fetch_assoc()) {
        $idreparto = $resultA["idreparto"];
        $cLatitudReparto = $resultA["cLatitudReparto"];
        $cLongitudReparto = $resultA["cLongitudReparto"];
        $cReferenciaReparto = $resultA["cReferenciaReparto"];
        $cNombreRemitenteReparto = $resultA["cNombreRemitenteReparto"];
        $cNumeroRemitenteReparto = $resultA["cNumeroRemitenteReparto"];
    }
?>