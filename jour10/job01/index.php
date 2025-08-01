<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Liste des étudiants</h1>

<?php
// Connexion à la base de données
$connexion = mysqli_connect("localhost", "root", "", "jour09");

// Vérification de la connexion
if (!$connexion) {
    die("<div class='message'>Erreur de connexion : " . mysqli_connect_error() . "</div>");
}

// Requête SQL
$requete = "SELECT * FROM etudiants";
$resultat = mysqli_query($connexion, $requete);

// Vérification s’il y a des résultats
if (mysqli_num_rows($resultat) > 0) {
    echo "<table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>prenom</th>
                    <th>nom</th>
                    <th>naissance</th>
                    <th>sexe</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>";

    // Boucle d’affichage
    while ($ligne = mysqli_fetch_assoc($resultat)) {
        echo "<tr>
                <td>" . $ligne['id'] . "</td>
                <td>" . $ligne['prenom'] . "</td>
                <td>" . $ligne['nom'] . "</td>
                <td>" . $ligne['naissance'] . "</td>
                <td>" . $ligne['sexe'] . "</td>
                <td>" . $ligne['email'] . "</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "<div class='message'>Aucun étudiant trouvé.</div>";
}

// Fermeture de la connexion
mysqli_close($connexion);
?>

</body>
</html>
