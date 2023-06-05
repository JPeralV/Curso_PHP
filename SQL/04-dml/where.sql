--Consulta con una condicion

SELECT *
FROM usuarios
WHERE email = 'calvo_pelon@bald.com';


/* Operadores comparativos
Igual: =
Distinto: !=
Menor que: <
Mayor que: >
Menor o igual: <=
Mayor o igual: >=
Entre: between A and B
En: in
Es nullo: is null
No es nullo: is not null
Como: like
No es como: not like
*/

--Ejemplos

SELECT nombre , apellidos
FROM usuarios
where YEAR (fecha) = 2043;

SELECT nombre , apellidos
FROM usuarios
where YEAR (fecha) != 2043 OR ISNULL (fecha);

--Operadores logicos

/*
O: Or
Y: And
No: Not
*/
--Comodines
/*

*/
--Ejemplos

SELECT

