--Consultas agrupamiento
SELECT titulo
FROM entradas
GROUP BY category_id;
SELECT COUNT(titulo) AS "NUMERO DE ENTRADAS"
FROM entradas
GROUP BY category_id
HAVING COUNT(titulo) >= 4;

/*
AVG     Sacar la media
COUNT   Contar el numero de elementos
MAX     Valor maximo del grupo
Min     Valor minimo del grupo
SUM     Sumar todo el contenido del grupo


*/

SELECT AVG(id) AS "media de entradas"
FROM entradas;
SELECT MAX(id) AS "maximo id", titulo
FROM entradas;
SELECT SUM(id) as "suma de las entradas", titulo
FROM entradas;

