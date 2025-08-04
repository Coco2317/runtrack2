<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Capacité moyenne des salles</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1> Capacité moyenne des salles</h1>

<?php
$connexion = mysqli_connect("localhost", "root", "", "jour09");

if (!$connexion) {
    die("<div class='message'>Erreur de connexion : " . mysqli_connect_error() . "</div>");
}

$requete = "SELECT AVG(capacite) AS capacite_moyenne FROM salles";
$resultat = mysqli_query($connexion, $requete);

if ($resultat && mysqli_num_rows($resultat) > 0) {
    echo "<table>
            <thead>
                <tr>
                    <th>capacite_moyenne</th>
                </tr>
            </thead>
            <tbody>";

    $ligne = mysqli_fetch_assoc($resultat);
    echo "<tr>
            <td>" . round($ligne['capacite_moyenne'], 2) . "</td>
          </tr>";

    echo "</tbody></table>";
} else {
    echo "<div class='message'>Aucune donnée trouvée.</div>";
}

mysqli_close($connexion);
?>

</body>
</html>
