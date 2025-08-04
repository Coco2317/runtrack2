<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Capacité totale des salles</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Capacité totale des salles</h1>

<?php

$connexion = mysqli_connect("localhost", "root", "", "jour09");

if (!$connexion) {
    die("<div class='message'>Erreur de connexion : " . mysqli_connect_error() . "</div>");
}

$requete = "SELECT SUM(capacite) AS capacite_totale FROM salles";
$resultat = mysqli_query($connexion, $requete);

if ($resultat && mysqli_num_rows($resultat) > 0) {
    $ligne = mysqli_fetch_assoc($resultat);
    echo "<table>
            <thead>
                <tr><th>capacite_totale</th></tr>
            </thead>
            <tbody>
                <tr><td>" . htmlspecialchars($ligne['capacite_totale']) . "</td></tr>
            </tbody>
          </table>";
} else {
    echo "<div class='message'>Aucune donnée trouvée.</div>";
}

mysqli_close($connexion);
?>

</body>
</html>
