--Insertal nuevos registros

INSERT INTO usuarios
VALUES
  (null, 'Jose', 'Peral', 'j@peral.bald', 'hash', '01-05-2042');

--Mostrar todos los campos

SELECT *
FROM usuarios;

--Operadoreas aritmeticos

SELECT email, (7+7) as 'OPERACION'
FROM usuarios;

--Funciones matematicas
SELECT ABS(7) as 'OPERACION'
FROM usuarios;
SELECT CEILING(7) as 'OPERACION'
FROM usuarios;
SELECT FLOOR(7) as 'OPERACION'
FROM usuarios;
SELECT ABS(7) as 'OPERACION'
FROM usuarios;
SELECT PI() as 'OPERACION'
FROM usuarios;
SELECT RAND() as 'OPERACION'
FROM usuarios;
SELECT ROUND(7.635362,1) as 'OPERACION'
FROM usuarios;
SELECT SQRT(7) as 'OPERACION'
FROM usuarios;
SELECT
TRUNCATE
(7.23223) as 'OPERACION'FROM usuarios;

--Borrar registros
DELETE FROM usuarios WHERE emaioñ = "admin@admin.com";







