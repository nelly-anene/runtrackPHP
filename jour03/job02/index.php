<?php
// Job 02 -Afficher un caractère sur deux
// Création de la string
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Parcours de la chaîne en affichant un caractère sur deux
for ($i = 0; $i < strlen($str); $i += 2) {
    echo $str[$i];
}
?>