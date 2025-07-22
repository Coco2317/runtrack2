<?php
for ($i =2; $i<=1000; $i++) {
    $isPrime = true; //  $i est premier

    // On teste les diviseurs de 2 à sqrt($i)
for ($j = 2; $j <= sqrt($i);$j++) {
if ($i %$j ==0){
    $isPrime = false; // $i est divisible par $j donc pas premier
    break; // On arrête la vérification
}
}
if ($isPrime) {
    echo $i."<br>";
}
}
?>
