<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nombre pair ou impair</title>
</head>
<body>

    <form method="GET">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" name="nombre" id="nombre" required>
        <button type="submit">Vérifier</button>
    </form>


    <?php
    if (isset($_GET["nombre"])) {
        $valeur = $_GET["nombre"];
        if (is_numeric($valeur) && intval($valeur) == $valeur) {
            $nombre = intval($valeur);

            if ($nombre % 2 === 0) {
                echo "<p>Nombre pair</p>";
            } else {
                echo "<p>Nombre impair</p>";
            }
        } else {
            echo "<p>Entrer un nombre entier valide.</p>";
        }
    }
    ?>
</body>
</html>
