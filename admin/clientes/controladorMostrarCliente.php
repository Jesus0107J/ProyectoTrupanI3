<?php
    include '../configDB.php';
    $datos="";
    $query = "CALL MostrarClientes();";
    $sentencia = $conn->prepare($query);
    $sentencia->execute();
    $result = $sentencia->get_result();

    $cNombreCliente = "";
    $cApellidoCliente = "";
    $cDNICliente = "";
    $cTelefonoCliente = "";
    $cCorreoCliente = "";
    $cContraseñaCliente = "";

    while ($resultA = $result->fetch_assoc()) {
        $idcliente = $resultA["idcliente"];
        $cNombreCliente = $resultA["cNombreCliente"];
        $cApellidoCliente = $resultA["cApellidoCliente"];
        $cDNICliente = $resultA["cDNICliente"];
        $cTelefonoCliente = $resultA["cTelefonoCliente"];
        $cCorreoCliente = $resultA["cCorreoCliente"];
        $cContraseñaCliente = $resultA["cContraseñaCliente"];
    }
?>