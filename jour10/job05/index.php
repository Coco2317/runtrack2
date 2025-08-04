<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Étudiants de moins de 18 ans</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1> Étudiants ayant moins de 18 ans</h1>

<?php

$connexion = mysqli_connect("localhost", "root", "", "jour09");

if (!$connexion) {
    die("<div class='message'>Erreur de connexion : " . mysqli_connect_error() . "</div>");
}

$requete = "SELECT * FROM etudiants WHERE naissance > DATE_SUB(CURDATE(), INTERVAL 18 YEAR)";
$resultat = mysqli_query($connexion, $requete);

if (mysqli_num_rows($resultat) > 0) {
    echo "<table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Date de naissance</th>
                    <th>Sexe</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>";
    
    while ($ligne = mysqli_fetch_assoc($resultat)) {
        echo "<tr>
                <td>" . htmlspecialchars($ligne['id']) . "</td>
                <td>" . htmlspecialchars($ligne['prenom']) . "</td>
                <td>" . htmlspecialchars($ligne['nom']) . "</td>
                <td>" . htmlspecialchars($ligne['naissance']) . "</td>
                <td>" . htmlspecialchars($ligne['sexe']) . "</td>
                <td>" . htmlspecialchars($ligne['email']) . "</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "<div class='message'>Aucun étudiant de moins de 18 ans trouvé.</div>";
}

mysqli_close($connexion);
?>

</body>
</html>
