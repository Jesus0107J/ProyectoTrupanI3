CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarServicio`(cNombreServicio VARCHAR(300), cDescripcion VARCHAR(300), nPrecioServicio INT, cRutaImagenServicio VARCHAR (300))
BEGIN
	INSERT INTO servicios
    (cNombreServicio, cDescripcion, nPrecioServicio, cRutaImagenServicio, lVigente)
    VALUES
    (cNombreServicio, cDescripcion, nPrecioServicio, cRutaImagenServicio, 1);
END

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarServicio`(idservicioP INT, cNombreServicio VARCHAR(300), cDescripcion VARCHAR(300), nPrecioServicio INT, cRutaImagenServicio VARCHAR (300))
BEGIN
	 UPDATE servicios
    SET 
        cNombreServicio = cNombreServicio,
        cDescripcion = cDescripcion,
        nPrecioServicio = nPrecioServicio,
        cRutaImagenServicio = cRutaImagenServicio
    WHERE idservicio = idservicioP
        AND lVigente = 1;
END

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarServicios`()
BEGIN
	SELECT
        A.idservicio,
        A.cNombreServicio,
        A.cDescripcion,
        A.nPrecioServicio,
        A.cRutaImagenServicio,
        A.lVigente
    FROM servicios A
    WHERE A.lVigente = 1;
END

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarServicio`(idservicio INT)
BEGIN
	SELECT
        A.idservicio,
        A.cNombreServicio,
        A.cDescripcion,
        A.nPrecioServicio,
        A.cRutaImagenServicio,
        A.lVigente
    FROM servicios A
    WHERE A.idservicio =  idservicio
        AND A.lVigente = 1;
END

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarServicio`(idservicioP INT)
BEGIN
	UPDATE servicios
    SET 
        lVigente = 0
    WHERE idservicio = idservicioP
        AND lVigente = 1;
END