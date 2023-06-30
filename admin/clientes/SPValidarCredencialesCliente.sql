CREATE DEFINER=`root`@`localhost` PROCEDURE `ValidarCredencialesCliente`(cCorreoCliente VARCHAR(300), cContraseñaCliente VARCHAR(300))
BEGIN
	SELECT 
        A.idcliente,
        A.cNombreCliente,
        A.cApellidoCliente,
        A.cDNICliente,
        A.cTelefonoCliente,
        A.cCorreoCliente,
        A.cContraseñaCliente
    FROM clientes A
    WHERE A.cCorreoCliente = cCorreoCliente
        AND A.cContraseñaCliente = cContraseñaCliente;
END