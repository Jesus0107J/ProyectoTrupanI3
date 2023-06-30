<?php
    include '../configDB.php';
    $datos="";
    $query = "CALL MostrarPedidos();";
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
                                    <button class='btn btn-danger' onclick = EliminarPedido(". $resultA["idservicio"] .");>Quitar</button>
                                </td>
                            </tr>";
    };
?>