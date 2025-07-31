SELECT *
FROM etudiants
WHERE naissance > DATE_SUB(curdate(), INTERVAL 18 YEAR);