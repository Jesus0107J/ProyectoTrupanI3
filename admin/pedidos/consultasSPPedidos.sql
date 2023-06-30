CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarPedido`(cNombreServicio VARCHAR(300), cDescripcion VARCHAR(300), nPrecioServicio INT)
BEGIN
	INSERT INTO pedidos
    (cNombreServicio, cDescripcion, nPrecioServicio, lVigente)
    VALUES
    (cNombreServicio, cDescripcion, nPrecioServicio, 1);
END

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarPedido`(idservicioP INT)
BEGIN
	UPDATE pedidos
    SET 
        lVigente = 0
    WHERE idservicio = idservicioP
        AND lVigente = 1;
END

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarPedido`()
BEGIN
	SELECT
        A.idservicio,
        A.cNombreServicio,
        A.cDescripcion,
        A.nPrecioServicio,
        A.lVigente
    FROM pedidos A
    WHERE A.lVigente = 1;
END

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarPedidos`()
BEGIN
	SELECT
        A.idservicio,
        A.cNombreServicio,
        A.cDescripcion,
        A.nPrecioServicio,
        A.lVigente
    FROM pedidos A
    WHERE A.lVigente = 1;
END