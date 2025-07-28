<?php
function calcule($a, $operation, $b) {
    switch ($operation) { // switch pour choisir l'opération à effectuer selon $operation
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b != 0) { // On vérifie que $b n'est pas zéro pour éviter une division par zéro
                return $a / $b;
            } else {
                return "Erreur : division par zéro"; // Message d'erreur si division impossible
            }
        case '%':
            if ($b != 0) { // Vérification aussi pour éviter erreur modulo par zéro
                return $a % $b;
            } else {
                return "Erreur : modulo par zéro";
            }
        default:
            return "Erreur : opération inconnue";
    }
}

echo "10 + 5 = " . calcule(10, '+', 5) . "<br>";
echo "8 * 3 = " . calcule(8, '*', 3) . "<br>";
echo "10 / 0 = " . calcule(10, '/', 0) . "<br>";
echo "10 % 3 = " . calcule(10, '%', 3) . "<br>";
echo "10 $ 3 = " . calcule(10, '$', 3) . "<br>";

?>
