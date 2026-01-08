<?php
//Les nombres de caractère

//creation de string
$str="Dans l'espace, personne ne vous entend crier";

//initialisation de compteur
$compteur = 0;

// La chaîne pour compter les caractères
for ($i = 0; $i < strlen($str); $i++) {
    $compteur++;
}
// Le résultat
echo "La chaîne contient $compteur caractères";

?>
