php
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Job04</title>
</head>
<body>
    <h2>Formulaire POST</h2>
    
    <form method="POST">
        Nom: <input type="text" name="nom"><br>
        Prenom: <input type="text" name="prenom"><br>
        Message: <input type="text" name="message"><br>
        <input type="submit" value="Envoyer">
    </form>
    
    <br>
    
    <?php
    
    if(count($_POST) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";
        
        foreach($_POST as $arg => $val) {
            echo "<tr>";
            echo "<td>$arg</td>";
            echo "<td>$val</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    }
    
    ?>
    
</body>
</html>
