<?php
// Création de la string
$str = "Les choses que l'on Possède finissent par nous posséder";  // ← ; ajouté

// La chaîne à l'envers
for ($i = strlen($str) - 1; $i >= 0; $i--) {  // ← $i ajouté
    echo $str[$i];
}
?>
