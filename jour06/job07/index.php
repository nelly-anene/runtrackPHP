<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job07 - Bubble Sort</title>
</head>
<body>
    <h1>Job07 - Tri par Bulles</h1>

<?php
function bubblesort($tab, $croissant) {
    $n = count($tab);
    
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($croissant) {
                if ($tab[$j] > $tab[$j + 1]) {
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $temp;
                }
            } else {
                if ($tab[$j] < $tab[$j + 1]) {
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $temp;
                }
            }
        }
    }
    
    return $tab;
}

// Test avec l'exemple demandé
$tableau = array("abc", "ghi", "def");

echo "<h2>Tableau original:</h2>";
echo "<p>" . implode(", ", $tableau) . "</p>";

echo "<h2>Ordre croissant (true):</h2>";
$croissant = bubblesort($tableau, true);
echo "<p>" . implode(", ", $croissant) . "</p>";

echo "<h2>Ordre décroissant (false):</h2>";
$decroissant = bubblesort($tableau, false);
echo "<p>" . implode(", ", $decroissant) . "</p>";
?>

</body>
</html>