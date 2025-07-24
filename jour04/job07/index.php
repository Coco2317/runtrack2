<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice Maison</title>
</head>
<body>

    <form method="GET">
        <label for="largeur">Largeur :</label>
        <input type="text" name="largeur" id="largeur" required><br>

        <label for="hauteur">Hauteur :</label>
        <input type="text" name="hauteur" id="hauteur" required><br>

        <button type="submit">Afficher la maison</button>
    </form>

    <pre>
<?php
if (isset($_GET["largeur"]) && isset($_GET["hauteur"])) {
    $largeur = intval($_GET["largeur"]);
    $hauteur = intval($_GET["hauteur"]);

    if ($largeur >= 2 && $hauteur >= 1 && $largeur % 2 === 0) {

        $toitHauteur = $largeur / 2;

        for ($i = 0; $i < $toitHauteur; $i++) {
            $espacesAvant = str_repeat(' ', $toitHauteur - $i - 1);
            $espacesMilieu = str_repeat(' ', $i * 2);
            echo $espacesAvant . '/' . $espacesMilieu . '\\' . "\n";
        }

        echo '/' . str_repeat('_', $largeur) . '\\' . "\n";

        
        for ($i = 0; $i < $hauteur - 1; $i++) {
            echo '|' . str_repeat(' ', $largeur) . '|' . "\n";
        }

        
        echo '|' . str_repeat('_', $largeur) . '|' . "\n";

    } else {
        echo "entrez une largeur paire ≥ 2 et une hauteur ≥ 1.";
    }
}

?>
    </pre>

</body>
</html>
