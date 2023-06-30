CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarCliente`(cNombreCliente VARCHAR(300), cApellidoCliente VARCHAR(300), cDNICliente VARCHAR(45), 
cTelefonoCliente VARCHAR (45), cCorreoCliente VARCHAR(300), cContraseñaCliente VARCHAR(300))
BEGIN
	INSERT INTO clientes
    (cNombreCliente, cApellidoCliente, cDNICliente, cTelefonoCliente, cCorreoCliente, cContraseñaCliente, lVigente)
    VALUES
    (cNombreCliente, cApellidoCliente, cDNICliente, cTelefonoCliente, cCorreoCliente, cContraseñaCliente, 1);
END

CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarCliente`(idclienteP INT, cNombreCliente VARCHAR(300), cApellidoCliente VARCHAR(300), cDNICliente VARCHAR(45), 
cTelefonoCliente VARCHAR (45), cCorreoCliente VARCHAR(300), cContraseñaCliente VARCHAR(300))
BEGIN
	UPDATE clientes
    SET 
        cNombreCliente = cNombreCliente,
        cApellidoCliente = cApellidoCliente,
        cDNICliente = cDNICliente,
        cTelefonoCliente = cTelefonoCliente,
        cCorreoCliente = cCorreoCliente,
        cContraseñaCliente = cContraseñaCliente
    WHERE idcliente = idclienteP
        AND lVigente = 1;
END

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarClientes`()
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
    WHERE A.lVigente = 1;
END