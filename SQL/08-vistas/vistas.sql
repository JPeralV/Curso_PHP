/*Podemos definir las vistas como una consulta almacenada en la base de datos que se utiliza como una tabla virtual y no almacena datos sino que utiliza asociaciones y los datos de las tablas originales de forma que siempre se mantiene actualizada*/


CREATE VIEW entradas_con_nombres
AS

  SELECT *
  FROM usuarios
  WHERE id IN (SELECT usuarios_id
  FROM entradas);

/*Invocarla*/

SELECT *
FROM entradas_con_nombres;