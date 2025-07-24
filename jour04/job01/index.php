<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jour04 - job01</title>
</head>
<body>

    <form method="get" action="">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom"><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom"><br><br>

        <label for="age">Âge :</label>
        <input type="text" name="age" id="age"><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <p>
        <?php
        if (!empty($_GET)) {
            $nbArguments = count($_GET);
            echo "Le nombre d'arguments GET envoyés est : $nbArguments";
        }
        ?>
    </p>
</body>
</html>
