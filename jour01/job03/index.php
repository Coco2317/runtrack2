<?php
$varString = "PHP niveau débutant";
$varInt = 23;
$varFloat = 23.1;
$varBool = true;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau des Variables</title>
</head>
<body>

<table border="2">
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
</thead>
<tbody> 
    <tr>
        <td><?php echo gettype($varString); ?></td>
        <td>$varString</td>
        <td><?php echo $varString; ?></td>
    </tr>

    <tr>
        <td><?php echo gettype($varInt); ?></td>
        <td>$varInt</td>
        <td><?php echo $varInt; ?></td>
    </tr>

    <tr>
        <td><?php echo gettype($varFloat); ?></td>
        <td>$varFloat</td>
        <td><?php echo $varFloat; ?></td>
    </tr>

     <tr>
        <td><?php echo gettype($varBool); ?></td>
        <td>$varBool</td>
        <td><?php echo $varBool ? "true" : "false";?></td>
    </tr>
</tbody>
</table>