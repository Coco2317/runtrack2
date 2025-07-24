<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jour04 - Job04</title>
</head>

<body>

<h1>Formulaire type POST</h1>
    <form method="POST" action="index.php">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom"><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom"><br><br>

        <label for="email">Email :</label>
        <input type="text" name="email" id="email"><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <hr> 

    <?php
    if (!empty($_POST)) {
        echo "<h2>Données POST reçues :</h2>";
        echo "<table border='2' cellpadding='10'>";
        echo "<thead><tr><th>Argument</th><th>Valeur</th></tr></thead>";
        echo "<tbody>";

        foreach ($_POST as $key => $value) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($key) . "</td>";
            echo "<td>" . htmlspecialchars($value) . "</td>";
            echo "</tr>";
        }

        echo "</tbody></table>";
    }
    ?>
    
</body>
</html>
