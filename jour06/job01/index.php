<?php
$style = isset($_GET['style']) ? $_GET['style'] : 'style1';
$prénom = isset($_GET['prénom']) ? htmlspecialchars($_GET['prénom']) : null;

$styles_valides = ['style1', 'style2', 'style3'];
if (!in_array($style, $styles_valides)) {
    $style = 'style1';
}

// Message selon style
$messages = [
    'style1' => '🌙 Vous avez invoqué le style rose mystique… Les énergies sont douces aujourd\'hui.',
    'style2' => '🍃 Le style naturel a été tiré. Simplicité et harmonie guideront votre chemin.',
    'style3' => '🔮 Le dégradé astral bleu clair vous ouvre la voie des révélations célestes.'
];
$message_mystique = $messages[$style];

// Tirage oracle du jour
$oracles = [
    "🔥 Le Feu : Une énergie nouvelle te pousse à agir. Ne tarde pas.",
    "🌙 La Lune : Écoute ton intuition. Le silence est une réponse.",
    "🌟 L'Étoile : Tu es guidé·e. Fais confiance à ta lumière intérieure.",
    "🦋 La Transformation : Une mue s'annonce. Accueille-la.",
    "💎 Le Cristal : Ta vérité est précieuse. Exprime-la.",
    "🌀 Le Souffle : Une idée légère peut devenir souffle de changement.",
    "⚖️ La Balance : L'équilibre est clé aujourd'hui. Avance avec justesse.",
    "☀️ Le Soleil : Rayonne, aujourd'hui est propice à la clarté et à la joie.",
];

// Tirage si le formulaire a été envoyé
$oracle_du_jour = null;
if ($prénom) {
    $oracle_du_jour = $oracles[array_rand($oracles)];
}

?>



<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Formulaire Tarot</title>
  <link rel="stylesheet" href="<?= htmlspecialchars($style) ?>.css">
</head>
<body>

  <h1>🔮 Formulaire de Divination</h1>

  <p class="message"><?= $message_mystique ?></p>

  <?php if ($oracle_du_jour): ?>
    <p class="oracle">💫Message pour <?= $prénom ?> : <strong><?= $oracle_du_jour ?></strong></p>
  <?php endif; ?>

  <form method="get" action="" class="styled-form">
    <label for="prénom">Prénom :</label>
    <input type="text" name="prénom" id="prénom" required value="<?= $prénom ?? '' ?>">

    <label for="number">Chiffre entre 1 et 5 :</label>
    <input type="number" name="number" id="number" min="1" max="5" required>

    <label for="style">Choisissez votre style mystique :</label>
    <select name="style" id="style">
      <option value="style1" <?= $style === 'style1' ? 'selected' : '' ?>>Message 1</option>
      <option value="style2" <?= $style === 'style2' ? 'selected' : '' ?>>Message 2</option>
      <option value="style3" <?= $style === 'style3' ? 'selected' : '' ?>>Message 3</option>
    </select>

    <button type="submit">Envoyer</button>
  </form>

</body>
</html>
