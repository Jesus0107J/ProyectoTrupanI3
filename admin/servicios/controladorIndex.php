<?php
    include '../configDB.php';
    $datos="";
    $query = "CALL MostrarServicios();";
    $sentencia = $conn->prepare($query);
    $sentencia->execute();
    $result = $sentencia->get_result();

    while ($resultA = $result->fetch_assoc()) {
        $datos = $datos . "<tr>
                                <td>
                                    ". $resultA["idservicio"] ."
                                </td>
                                <td>
                                    ". $resultA["cNombreServicio"] ."
                                </td>
                                <td>
                                    ". $resultA["cDescripcion"] ."
                                </td>
                                <td>
                                    ". $resultA["nPrecioServicio"] ."
                                </td>
                                <td>
                                    <a href='actualizarV.php?idservicio=" . $resultA["idservicio"] . "' class='btn btn-success'>Actualizar</a>
                                    <button class='btn btn-danger' onclick = EliminarServicio(". $resultA["idservicio"] .");>Eliminar</button>
                                </td>
                            </tr>";
    };
?>