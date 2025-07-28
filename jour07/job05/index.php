<?php
function occurrences($str, $char) {
    $count = 0; 
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === $char) { // compare chaque caractère à $char
            $count++; 
        }
    }
    return $count; // retourner le nombre total d'occurrences
}

// Exemples
echo occurrences("Papillon", "l"); // Affiche 2
echo "<br>";
echo occurrences("Papillon", "z"); // Affiche 0
echo "<br>";
echo occurrences("Coccinelle", "c"); // Affiche 2 (car sensible à la casse, donc ignore le "C" majuscule)

?>
