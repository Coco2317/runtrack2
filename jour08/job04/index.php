<?php
// Durée du cookie : 30 jours
$cookie_duration = time() + 30 * 24 * 60 * 60;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Si l'utilisateur se connecte
    if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
        $prenom = htmlspecialchars(trim($_POST['prenom']));
        setcookie('prenom', $prenom, $cookie_duration);
        header('Location: index.php'); // Redirige pour éviter la resoumission du formulaire
        exit();
    }

    // Si l'utilisateur se déconnecte
    if (isset($_POST['deco'])) {
        setcookie('prenom', '', time() - 3600); // Expire le cookie
        header('Location: index.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Cookie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Connexion</h1>

    <?php if (isset($_COOKIE['prenom'])): ?>
        <p class="greeting">Bonjour <strong><?= htmlspecialchars($_COOKIE['prenom']) ?></strong> !</p>
        <form method="post">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else: ?>
        <form method="post">
            <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>

</body>
</html>
