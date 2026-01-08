<?php
// Job 05 - Compter les voyelles et consonnes et afficher dans un tableau HTML

// Création de la string
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

// Création du dictionnaire
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

$voyelles = "aeiouyAEIOUY";

for ($i = 0; $i < strlen($str); $i++) {
    $lettre = $str[$i];

    if (ctype_alpha($lettre)) {
        if (strpos($voyelles, $lettre) !== false) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Job 05</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>