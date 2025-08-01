<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des salles</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Liste des salles</h1>

<?php
$connexion = mysqli_connect("localhost", "root", "", "jour09");

if (!$connexion) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

$requete = "SELECT nom, capacite FROM salles";
$resultat = mysqli_query($connexion, $requete);

if (mysqli_num_rows($resultat) > 0) {
    echo "<table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Capacité</th>
                </tr>
            </thead>
            <tbody>";
    
    while ($ligne = mysqli_fetch_assoc($resultat)) {
        echo "<tr>
                <td>" . htmlspecialchars($ligne['nom']) . "</td>
                <td>" . htmlspecialchars($ligne['capacite']) . "</td>
              </tr>";
    }
    
    echo "</tbody></table>";
} else {
    echo "<p>Aucune salle trouvée.</p>";
}

mysqli_close($connexion);
?>

</body>
</html>
