php
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Job05</title>
</head>
<body>
    <h2>Connexion</h2>
    
    <form method="POST">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" value="Se connecter">
    </form>
    
    <br>
    
    <?php
    
    if(isset($_POST['username']) && isset($_POST['password'])) {
        
        $user = $_POST['username'];
        $pass = $_POST['password'];
        
        if($user == "John" && $pass == "Rambo") {
            echo "C'est pas ma guerre";
        } else {
            echo "Votre pire cauchemar";
        }
    }
    
    ?>
    
</body>
</html>
