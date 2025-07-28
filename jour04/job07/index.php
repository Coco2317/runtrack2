<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LE CASSE TÊTE CHINOIS</title>
</head>
<body>

    <form method="post">
        <label>Largeur :</label>
        <input type="text" name="largeur" value="<?= htmlspecialchars($_POST['largeur'] ?? '') ?>">

        <label>Hauteur :</label>
        <input type="text" name="hauteur" value="<?= htmlspecialchars($_POST['hauteur'] ?? '') ?>">

        <input type="submit" value="Envoyer">
    </form>

    <pre>
<?php
if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
    $largeur = $_POST['largeur'];
    $hauteur = $_POST['hauteur'];

    if (is_numeric($largeur) && is_numeric($hauteur)) {
        $largeur = (int)$largeur;
        $hauteur = (int)$hauteur;

        if ($largeur > 2 && $hauteur > 1) {
            $toit_hauteur = ceil($largeur / 2);

            // Dessin du toit
            for ($i = 0; $i < $toit_hauteur; $i++) {
                $espaces = $toit_hauteur - $i - 1;
                echo str_repeat(" ", $espaces);
                echo "/";

                // Calcul des tirets au centre
                $tirets = $i * 2;
                if ($largeur % 2 == 1) {
                    if ($i == 0) {
                        // sommet du toit, pas de tirets
                        echo "";
                    } else {
                        echo str_repeat("-", $tirets - 1);
                    }
                } else {
                    echo str_repeat("-", $tirets);
                }

                echo "\\\n";
            }

            // Les murs
            for ($i = 0; $i < $hauteur; $i++) {
                echo "|" . str_repeat(" ", $largeur - 2) . "|\n";
            }

            // La base
            echo str_repeat("-", $largeur) . "\n";

        } else {
            echo "Erreur : La largeur doit être supérieure à 2 et la hauteur supérieure à 1.\n";
        }
    } else {
        echo "Erreur : Merci d'entrer des nombres valides pour la largeur et la hauteur.\n";
    }
}
?>
    </pre>

</body>
</html>