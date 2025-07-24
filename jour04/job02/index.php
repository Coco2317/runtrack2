<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET</title>
</head>
<body>

<h2>Formulaire GET</h2>
<form method="GET" action="index.php">
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom"><br><br>

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom"><br><br>

    <label for="age">Âge :</label>
    <input type="text" name="age" id="age"><br><br>

    <input type="submit" value="Envoyer">
</form>


<?php
if (!empty($_GET)) {
    echo "<h2>Données reçues :</h2>";
    echo "<table border='3' cellpadding='12'>";
    echo "<thead><tr><th>Argument</th><th>Valeur</th></tr></thead>";
    echo "<tbody>";
    
    foreach ($_GET as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    
    echo "</tbody></table>";
}
?>
</body>
</html>
