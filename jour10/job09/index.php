<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Salles triées par capacité</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Liste des salles (triées par capacité décroissante)</h1>

<?php

$connexion = mysqli_connect("localhost", "root", "", "jour09");

if (!$connexion) {
    die("<div class='message'>Erreur de connexion : " . mysqli_connect_error() . "</div>");
}

$requete = "SELECT * FROM salles ORDER BY capacite DESC";
$resultat = mysqli_query($connexion, $requete);

if ($resultat && mysqli_num_rows($resultat) > 0) {
    echo "<table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>id_etage</th>
                    <th>capacite</th>
                </tr>
            </thead>
            <tbody>";

    while ($ligne = mysqli_fetch_assoc($resultat)) {
        echo "<tr>
                <td>" . htmlspecialchars($ligne['id']) . "</td>
                <td>" . htmlspecialchars($ligne['nom']) . "</td>
                <td>" . htmlspecialchars($ligne['id_etage']) . "</td>
                <td>" . htmlspecialchars($ligne['capacite']) . "</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "<div class='message'>Aucune salle trouvée.</div>";
}

mysqli_close($connexion);
?>

</body>
</html>
