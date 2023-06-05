/*
Consultas que se ejecutan dentro de otras.
Consiste en utilizar los resultados de la subconsulta para operar en la consulta principal.
Jugando con las claves ajenas/ foraneas.
*/

SELECT *
FROM usuarios
WHERE id IN (SELECT usuarios_id
FROM entradas);

/*
Sacar los usuarios que tengan alguna entrada que en su titulo tenga X
*/

SELECT nombre, apellidos WHERE id IN (SELECT usuario_id FROM entradas WHERE titulo LIKE "")