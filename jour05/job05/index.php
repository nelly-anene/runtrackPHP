<?php
//Function nommée “occurrences()”
function occurrences($str, $char) {
    $count = 0;

//Chaque chaine de la caractere parcourir
for ($i = 0; $i <strlen($str); $i++) {
    if ($str[$i] == $str) {
        $count++;
    }

}
// Paramètres: chaîne, caractère à chercher
// Retourne: nombre d'occurrences

return $count;

}

//Tests
echo "Dans 'Bonjour', le caractère 'o' apparaît " . occurrences("Bonjour", "o") . " fois<br>";
echo "Dans 'Hello World', le caractère 'l' apparaît " . occurrences("Hello World", "l") . " fois<br>";
echo "Dans 'PHP', le caractère 'P' apparaît " . occurrences("PHP", "P") . " fois<br>";
?>