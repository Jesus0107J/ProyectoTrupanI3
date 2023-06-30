<?php
    include '../configDB.php';
    $datos="";
    $query = "CALL MostrarUsuarios();";
    $sentencia = $conn->prepare($query);
    $sentencia->execute();
    $result = $sentencia->get_result();

    while ($resultA = $result->fetch_assoc()) {
        $datos = $datos . "<tr>
                                <td>
                                    ". $resultA["idusuario"] ."
                                </td>
                                <td>
                                    ". $resultA["cNombreUsuario"] ."
                                </td>
                                <td>
                                    ". $resultA["cNombres"] ."
                                </td>
                                <td>
                                    ". $resultA["cApellidos"] ."
                                </td>
                                <td>
                                    <button class='btn btn-success' onclick = AbrirFormularioEditar(". $resultA["idusuario"] .");>Actualizar</button>
                                    <button class='btn btn-danger' onclick = EliminarUsuario(". $resultA["idusuario"] .");>Eliminar</button>
                                </td>
                            </tr>";
    };
?>