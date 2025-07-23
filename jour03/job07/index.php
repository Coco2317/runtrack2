<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$length = strlen($str);
$newStr = "";

for ($i = 0; $i < $length; $i++) {
    if ($i == $length - 1) {
        $newStr .= $str[0];
    } else {
        $newStr .= $str[$i + 1];
    }
}
echo $newStr;
?>