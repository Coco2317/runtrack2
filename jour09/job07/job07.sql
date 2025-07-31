SELECT *
FROM etudiants
WHERE naissance <= DATE_SUB(curdate (), interval 18 year);