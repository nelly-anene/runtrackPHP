php

<?php
// Function bonjour

function bonjour($jour) {
    if ($jour == true) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
        }
    }
    
//Testing
echo "Test avec true: ";
bonjour (true);
echo "<br>";

echo "Test avec false: ";
bonjour (false);
?>

