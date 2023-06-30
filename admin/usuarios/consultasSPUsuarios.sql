CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarUsuario`(cNombreUsuario VARCHAR(300), cContraseñaUsuario VARCHAR(300), cNombres VARCHAR(300), cApellidos VARCHAR (300))
BEGIN
	INSERT INTO usuarios
    (cNombreUsuario, cContraseñaUsuario, cNombres, cApellidos, lVigente)
    VALUES
    (cNombreUsuario, cContraseñaUsuario, cNombres, cApellidos, 1);
END

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarUsuario`(idusuarioP INT, cNombreUsuario VARCHAR(300), cContraseñaUsuario VARCHAR(300), cNombres VARCHAR(300), cApellidos VARCHAR (300))
BEGIN
	UPDATE usuarios
    SET 
        cNombreUsuario = cNombreUsuario,
        cContraseñaUsuario = cContraseñaUsuario,
        cNombres = cNombres,
        cApellidos = cApellidos
    WHERE idusuario = idusuarioP
        AND lVigente = 1;
END

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarUsuarios`()
BEGIN
	SELECT
        A.idusuario,
        A.cNombreUsuario,
        A.cContraseñaUsuario,
        A.cNombres,
        A.cApellidos
    FROM usuarios A
    WHERE A.lVigente = 1;
END

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarUsuario`(idusuario INT)
BEGIN
	SELECT
        A.idusuario,
        A.cNombreUsuario,
        A.cContraseñaUsuario,
        A.cNombres,
        A.cApellidos
    FROM usuarios A
    WHERE A.lVigente = 1
        AND A.idusuario = idusuario;
END

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarUsuario`(idusuarioP INT)
BEGIN
	UPDATE usuarios
    SET 
        lVigente = 0
    WHERE idusuario = idusuarioP
        AND lVigente = 1;
END