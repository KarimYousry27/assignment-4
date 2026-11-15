SELECT
    e.firstName,
    e.lastName,
    e.officeCode AS officeNumber,
    o.city AS officeCity
FROM employees e
INNER JOIN offices o
ON e.officeCode = o.officeCode;