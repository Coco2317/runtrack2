<?php
// Fonction gras : met en gras (<b>) les mots qui commencent par une majuscule
function gras($str) {
    $mots = explode(' ', $str);
    foreach ($mots as $key => $mot) {
        $premiereLettre = substr($mot, 0, 1);
        if ($premiereLettre >= 'A' && $premiereLettre <= 'Z') {
            $mots[$key] = "<b>" . $mot . "</b>";
        }
    }
    return implode(' ', $mots);
}

// Fonction cesar : décalage simple des lettres, par défaut 2
function cesar($str, $decalage = 2) {
    $result = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if ($char >= 'A' && $char <= 'Z') {
            $code = ord($char) - 65;
            $code = ($code + $decalage) % 26;
            $result .= chr($code + 65);
        } elseif ($char >= 'a' && $char <= 'z') {
            $code = ord($char) - 97;
            $code = ($code + $decalage) % 26;
            $result .= chr($code + 97);
        } else {
            $result .= $char;
        }
    }
    return $result;
}

// Fonction plateforme : ajoute "_" aux mots finissant par "me"
function plateforme($str) {
    $mots = explode(' ', $str);
    foreach ($mots as $key => $mot) {
        $fin = substr($mot, -2);
        if ($fin == 'me') {
            $mots[$key] = $mot . '_';
        }
    }
    return implode(' ', $mots);
}

// Traitement du formulaire
$resultat = '';
$str = '';
$fonction = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $str = $_POST['str'] ?? '';
    $fonction = $_POST['fonction'] ?? '';

    if ($fonction == 'gras') {
        $resultat = gras($str);
    } elseif ($fonction == 'cesar') {
        $resultat = cesar($str);
    } elseif ($fonction == 'plateforme') {
        $resultat = plateforme($str);
    } else {
        $resultat = "Fonction inconnue.";
    }
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Transformation de texte</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<form method="post">
    <label>Texte : </label>
    <input type="text" name="str" value="<?= htmlspecialchars($str) ?>" required>
    <br><br>

    <label>Fonction : </label>
    <select name="fonction" required>
        <option value="">--Choisissez--</option>
        <option value="gras" <?= ($fonction == 'gras') ? 'selected' : '' ?>>Gras</option>
        <option value="cesar" <?= ($fonction == 'cesar') ? 'selected' : '' ?>>César</option>
        <option value="plateforme" <?= ($fonction == 'plateforme') ? 'selected' : '' ?>>Plateforme</option>
    </select>
    <br><br>

    <button type="submit">Envoyer</button>
</form>

<?php if ($resultat !== ''): ?>
    <h2>Résultat :</h2>
    <p><?= $resultat ?></p>
<?php endif; ?>

</body>
</html>
