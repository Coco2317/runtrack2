<?php
session_start();

// Initialisation du jeu
if (!isset($_SESSION['plateau'])) {
    $_SESSION['plateau'] = array_fill(0, 9, null);
    $_SESSION['joueur'] = 'X';
    $_SESSION['message'] = '';
}

// Réinitialisation
if (isset($_POST['reset'])) {
    $_SESSION['plateau'] = array_fill(0, 9, null);
    $_SESSION['joueur'] = 'X';
    $_SESSION['message'] = '';
}

// Quand le joueur clique sur une case
if (isset($_POST['case']) && $_SESSION['message'] === '') { // on autorise le coup seulement si le jeu n’est pas terminé.
    $index = (int) $_POST['case'];
    if (is_null($_SESSION['plateau'][$index])) {
        $_SESSION['plateau'][$index] = $_SESSION['joueur'];
        $gagnant = checkVictory($_SESSION['plateau']);

        if ($gagnant) {
            $_SESSION['message'] = "$gagnant a gagné !";
        } elseif (!in_array(null, $_SESSION['plateau'], true)) {
            $_SESSION['message'] = "Match nul !";
        } else {
            $_SESSION['joueur'] = ($_SESSION['joueur'] === 'X') ? 'O' : 'X';
        }
    }
}

// Fonction de vérification de victoire
function checkVictory($plateau) {
    $gagnantes = [
        [0,1,2],[3,4,5],[6,7,8],
        [0,3,6],[1,4,7],[2,5,8],
        [0,4,8],[2,4,6]
    ];
    foreach ($gagnantes as [$a, $b, $c]) {
        if ($plateau[$a] !== null && $plateau[$a] === $plateau[$b] && $plateau[$b] === $plateau[$c]) { // les trois cases doivent être identiques ET non vides
            return $plateau[$a];
        }
    }
    return null;  // Si aucune combinaison n'a été trouvée, on retourne null : pas de gagnant
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Morpion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Morpion</h1>

<?php if ($_SESSION['message']): ?>
    <p class="message"><?= htmlspecialchars($_SESSION['message']) ?></p>
<?php else: ?>
    <p class="message">Joueur actuel : <?= $_SESSION['joueur'] ?></p>
<?php endif; ?> 

<form method="post" class="grille">
    <?php foreach ($_SESSION['plateau'] as $i => $val): ?>
        <?php if (is_null($val)): ?>
            <button type="submit" name="case" value="<?= $i ?>">&nbsp;</button>
        <?php else: ?>
            <div class="case"><?= $val ?></div>
        <?php endif; ?>
    <?php endforeach; ?>
</form>

<form method="post" class="reset-form">
    <button type="submit" name="reset">Réinitialiser la partie</button>
</form>

</body>
</html>
