<?php
//function qui calcule 3 paramèttres

function calcule($a, $operateur, $b) {
    switch ($operateur) {
        case "+":
            return $a + $b;
        case "-":
            return$a -  $b;
        case '*':
            return $a * $b;
        case '/':
            return $a / $b;
        case '%':
            return $a % $b;
        default:
            return "Opérateur invalide";
    }

}

//Tests pour les operateurss
echo "10 + 5 = " . calcule(10, '+', 5) . "<br>";
echo "10 - 5 = " . calcule(10, '-', 5) . "<br>";
echo "10 * 5 = " . calcule(10, '*', 5) . "<br>";
echo "10 / 5 = " . calcule(10, '/', 5) . "<br>";
echo "10 % 3 = " . calcule(10, '%', 3) . "<br>";
?>