<?php
$cookie_name = "nbvisites";
$cookie_duration = time() + 30 * 24 * 60 * 60;
/*
cette fonction PHP renvoie le timestamp actuel en secondes depuis le 1er janvier 1970 (appelé aussi époque Unix).
c’est une multiplication qui calcule le nombre de secondes dans 30 jours.
*/

if (isset($_POST['reset'])) {
    setcookie($cookie_name, "", time() - 3600);
    $visites = 0;
} else {
    if (isset($_COOKIE[$cookie_name])) {
        $visites = $_COOKIE[$cookie_name] + 1;
    } else {
        $visites = 1;
    }
    setcookie($cookie_name, $visites, $cookie_duration);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Compteur de visites avec Cookie</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <h1>Tu as visité cette page <?= $visites ?> fois ! 🎉</h1>

    <form method="post">
        <button type="submit" name="reset">Réinitialiser 🔄</button>
    </form>
</body>
</html>
