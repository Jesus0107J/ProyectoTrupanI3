CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarUsuario`(idusuarioP INT)
BEGIN
	UPDATE usuarios
    SET 
        lVigente = 0
    WHERE idusuario = idusuarioP
        AND lVigente = 1;
END