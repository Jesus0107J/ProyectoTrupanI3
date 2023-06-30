<?php
    $idusuario = $_GET["idusuario"];
    include '../configDB.php';

    $datos="";
    $query = "CALL MostrarUsuario(?);";

    $sentencia = $conn->prepare($query);
    $sentencia->bind_param("i", $idusuario);
    $sentencia->execute();
    $result = $sentencia->get_result();

    $cNombreUsuario = "";
    $cContraseñaUsuario = "";
    $cNombres = "";
    $cApellidos="";

    while ($resultA = $result->fetch_assoc()){
        $cNombreUsuario = $resultA["cNombreUsuario"];
        $cContraseñaUsuario = $resultA["cContraseñaUsuario"];
        $cNombres = $resultA["cNombres"];
        $cApellidos = $resultA["cApellidos"];
    }    
?>
