php
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Job03</title>
</head>
<body>

<h2>Test formulaire POST</h2>

<form method="POST">
    Nom : <input type="text" name="nom"><br><br>
    Prenom : <input type="text" name="prenom"><br><br>
    Email : <input type="text" name="email"><br><br>
    <input type="submit" value="Envoyer">
</form>

<br>

<?php
$nb = 0;

if (isset($_POST)) {
    foreach ($_POST as $valeur) {
        $nb++;
    }
}

echo "Nombre d'arguments POST : " . $nb;
?>

</body>
</html>

