<?php
    $idservicio = $_GET["idservicio"];
    include '../configDB.php';

    $datos="";
    $query = "CALL MostrarServicio(?);";

    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("i", $idservicio);
    $sentencia->execute();
    $result = $sentencia->get_result();

    $cNombreServicio = "";
    $cDescripcion = "";
    $nPrecioServicio = 0;
    $cRutaImagenServicio="";

    while ($resultA = $result->fetch_assoc()){
        $cNombreServicio = $resultA["cNombreServicio"];
        $cDescripcion = $resultA["cDescripcion"];
        $nPrecioServicio = $resultA["nPrecioServicio"];
        $cRutaImagenServicio = $resultA["cRutaImagenServicio"];
    }    
?>