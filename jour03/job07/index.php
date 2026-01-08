<?php
// Job 07 - Rotation des caractères (chaque caractère est remplacé par le suivant)

// Création de la string
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Sauvegarde du premier caractère qui deviendra le dernier
$premierCaractere = $str[0];

// Parcours de la chaîne et remplacement
for ($i = 0; $i < strlen($str) - 1; $i++) {
    echo $str[$i + 1];
}

// Ajout du premier caractère à la fin
echo $premierCaractere;
?>cd