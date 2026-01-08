php
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Job01</title>
</head>
<body>
    <h2>Test formulaire GET</h2>
    
    <form method="GET">
        Nom: <input type="text" name="nom"><br><br>
        Prenom: <input type="text" name="prenom"><br><br>
        Age: <input type="text" name="age"><br><br>
        <input type="submit" value="Envoyer">
    </form>
    
    <br>
    
    <?php
    
    $nb = count($_GET);
    echo "Nombre d'arguments GET: " . $nb;
    
    ?>
    
</body>
</html>