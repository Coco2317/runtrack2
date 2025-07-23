<?php
echo "<pre>"; 

$hauteur = 5;

for ($i = 1; $i <= $hauteur; $i++) {
    
    for ($j = 1; $j <= $hauteur - $i; $j++) {
        echo " ";
    }

    
    for ($k = 1; $k <= 2 * $i - 1; $k++) {
        echo "*";
    }

    echo "\n"; 
}

echo "</pre>"; 
?>
