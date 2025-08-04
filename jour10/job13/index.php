<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Salles et Étages</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Liste des salles et leurs étages</h1>

<?php
$connexion = mysqli_connect("localhost", "root", "", "jour09");

if (!$connexion) {
    die("<div class='message'>Erreur de connexion : " . mysqli_connect_error() . "</div>");
}

$requete = "SELECT salles.nom AS nom_salle, etage.nom AS nom_etage
            FROM salles
            INNER JOIN etage ON salles.id_etage = etage.id";

$resultat = mysqli_query($connexion, $requete);

if ($resultat && mysqli_num_rows($resultat) > 0) {
    echo "<table>
            <thead>
                <tr>
                    <th>Nom de la salle</th>
                    <th>Étage</th>
                </tr>
            </thead>
            <tbody>";

    while ($ligne = mysqli_fetch_assoc($resultat)) {
        echo "<tr>
                <td>" . htmlspecialchars($ligne['nom_salle']) . "</td>
                <td>" . htmlspecialchars($ligne['nom_etage']) . "</td>
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
