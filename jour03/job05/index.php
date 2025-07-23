<?php
$str = "On est pas le meilleur quand on le croit mais quand on le sait";
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

$voyelles = ["a","e","i","o","u","y"];
for ($i = 0; $i < strlen($str); $i++) {
    $caractere = strtolower ($str[$i]);

if ($caractere >= "a" && $caractere <= "z") {
    if (in_array($caractere, $voyelles)) {
        $dic ["voyelles"] ++;
    } else {
        $dic ["consonnes"] ++;
    }
}

}
echo "<table border = 2>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{$dic['voyelles']}</td>
                <td>{$dic['consonnes']}</td>
            </tr>
        </tbody>
      </table>";
?>
