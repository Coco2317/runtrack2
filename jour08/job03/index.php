<?php
session_start();

// Initialiser la session "prenoms" si elle n'existe pas
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = []; //si pas encore de prénom [] crée une liste vide pour la démarrer    
}

// Réinitialiser la liste si on clique sur reset
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = []; //si l'utilisateur clique sur bouton réinitialiser, on vide cmplt la liste
}

// Ajouter le prénom si le formulaire est soumis et non vide
if (isset($_POST['prenom']) && trim($_POST['prenom']) !== '') { //trim enlève les espaces au début et à la fin du prénom 
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $_SESSION['prenoms'][] = $prenom;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Liste des prénoms en session</title>
    <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <h1>Ajoute un prénom à la session</h1>

    <form method="post">
        <input type="text" name="prenom" placeholder="Ton prénom" autocomplete="off" required />
        <button type="submit">Ajouter</button>
    </form>

    <?php if (!empty($_SESSION['prenoms'])): ?>
        <h2>Prénoms enregistrés :</h2>
        <ul>
            <?php foreach ($_SESSION['prenoms'] as $prenom): ?>
                <li><?= $prenom ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post">
        <button type="submit" name="reset">Réinitialiser la liste</button>
    </form>
</body>
</html>
