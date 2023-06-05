SELECT c.nombre, COUNT(e.id)
FROM entradas e
  RIGHT JOIN entradas e ON e.categorias = c.id
GROUP BY e.categorias_id;