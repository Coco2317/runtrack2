<?php
session_start(); 
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
} else {
    if (!isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 1;
    } else {
        $_SESSION['nbvisites']++;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites</title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Nombre de visites : <?= $_SESSION['nbvisites'] ?></h1>

    <form method="post">
        <button type="submit" name="reset">🔄 Réinitialiser</button>
    </form>
</body>
</html>
