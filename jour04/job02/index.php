php
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Job02</title>
</head>
<body>
    <h2>Formulaire GET</h2>
    
    <form method="GET">
        Nom: <input type="text" name="nom"><br>
        Prenom: <input type="text" name="prenom"><br>
        Ville: <input type="text" name="ville"><br>
        <input type="submit" value="Envoyer">
    </form>
    
    <br>
    
    <?php
    
    if(count($_GET) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";
        
        foreach($_GET as $arg => $val) {
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
