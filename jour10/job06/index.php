<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nombre total d'étudiants</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1> Nombre total d'étudiants</h1>

<?php
$connexion = mysqli_connect("localhost", "root", "", "jour09");

if (!$connexion) {
    die("<div class='message'>Erreur de connexion : " . mysqli_connect_error() . "</div>");
}

$requete = "SELECT COUNT(*) AS nb_etudiants FROM etudiants";
$resultat = mysqli_query($connexion, $requete);

if ($resultat && mysqli_num_rows($resultat) > 0) {
    $ligne = mysqli_fetch_assoc($resultat);
    echo "<table>
            <thead>
                <tr><th>nb_etudiants</th></tr>
            </thead>
            <tbody>
                <tr><td>" . htmlspecialchars($ligne['nb_etudiants']) . "</td></tr>
            </tbody>
          </table>";
} else {
    echo "<div class='message'>Aucun résultat trouvé.</div>";
}

mysqli_close($connexion);
?>

</body>
</html>
