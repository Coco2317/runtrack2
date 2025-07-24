<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jour04 - job03</title>
</head>
<body>

    <form method="POST" action="">
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
        if (!empty($_POST)) {
            $nbArguments = count($_POST);
            echo "Le nombre d'arguments POST envoyés est : $nbArguments";
        }
        ?>
    </p>
</body>
</html>
