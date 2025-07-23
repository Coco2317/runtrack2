<?php
$str = "les choses que l'on possede finissent par nous posseder.";
$reverse = "";

for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $reverse .= $str[$i];
}

echo $reverse;
?>