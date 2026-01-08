<?php
//Affichage de Voyelles

//Créer des sting
$str= "I'm sorry Dave i'm afraid i can't do that";

//Définition de voyelles
$Voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];


//La Chaîne
for ($i=0; $i <strlen($str); $i++) {

    //Verification pour Voyelles
    if(in_array($str[$i], $Voyelles)) {
        echo $str[$i];
    }
}
?>