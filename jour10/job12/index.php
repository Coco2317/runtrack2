<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Étudiants nés entre 1998 et 2018</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>🎓 Étudiants nés entre 1998 et 2018</h1>

<?php
$connexion = mysqli_connect("localhost", "root", "", "jour09");

if (!$connexion) {
    die("<div class='message'>Erreur de connexion : " . mysqli_connect_error() . "</div>");
}

$requete = "SELECT prenom, nom, naissance FROM etudiants 
            WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'";
$resultat = mysqli_query($connexion, $requete);

if ($resultat && mysqli_num_rows($resultat) > 0) {
    echo "<table>
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Date de naissance</th>
                </tr>
            </thead>
            <tbody>";

    while ($ligne = mysqli_fetch_assoc($resultat)) {
        echo "<tr>
                <td>" . htmlspecialchars($ligne['prenom']) . "</td>
                <td>" . htmlspecialchars($ligne['nom']) . "</td>
                <td>" . htmlspecialchars($ligne['naissance']) . "</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "<div class='message'>Aucun étudiant trouvé entre 1998 et 2018.</div>";
}

mysqli_close($connexion);
?>

</body>
</html>