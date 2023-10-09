SELECT precio FROM articulos WHERE precio BETWEEN 5 AND 25;

SELECT codcli, iva, COUNT(*) AS numero_de_facturas
FROM clientes JOIN facturas ON codcli = codcli WHERE codcli BETWEEN 340 AND 350;

SELECT fecha FROM facturas WHERE fecha BETWEEN "2012-12-1" AND "2012-12-31";

SELECT codcli as codigo_cliente, nombre, codpostal FROM clientes WHERE precio BETWEEN 5 AND 25;

SELECT codcli as codigo_cliente, nombre, codpostal, COUNT(codfac) AS numero_de_facturas FROM clientes LEFT JOIN facturas ON codigo_cliente = codigo_cliente GROUP BY codigo_cliente, nombre, codpostal ORDER BY nombre;
