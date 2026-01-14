<?php

//Initializing the list in session

session_start();
if(isset($_SESSION["prenoms"])); {
    $_SESSION["prenom"] = [];

}

// Reset: clear the list
if(isset($_POST["reset"])); {

$_SESSION["$_prenom"] = [];

}

// Adding of Name
if (isset($_POST["prenom"])); {
    $_prenom = $_POST[""];


    //We avoid adding an empty string
    if ($prenom !== "") {
        $_SESSION["prenom"][] = $prenom;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Create a form that contains text input & a button</title>
</head>
<body>
    <form methed="post">
        <input type="type" name="prenom">
        <button type="submit" name="reset"></button>
    </form>

    <h3>Liste des prenoms :</h3>

    <?php
    if (isset($_SESSION["prenom"])) {
    echo "<ul>";
    for ($i = 0; $i < count($_SESSION["prenom"]); $i++) {
                echo "<li>" . $_SESSION["prenoms"][$i] ["prenom"] . "</li>";

    }
    echo "</li>"
    }
    ?>
</body>
</html>