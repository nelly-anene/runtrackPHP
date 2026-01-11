<?php

function leetSpeak($str)
{
    $result = "";

    for ($i = 0; $i < strlen($str); $i++) {
        $c = $str[$i];

        if ($c == 'a' || $c == 'A') {
            $result .= '4';
        }
        elseif ($c == 'e' || $c == 'E') {
            $result .= '3';
        }
        elseif ($c == 'i' || $c == 'I') {
            $result .= '1';
        }
        elseif ($c == 'o' || $c == 'O') {
            $result .= '0';
        }
        else {
            $result .= $c;
        }
    }

    return $result;
}

// Tests
echo leetSpeak("Hello") . "<br>";
echo leetSpeak("Bonjour") . "<br>";
echo leetSpeak("La Plateforme");

?>