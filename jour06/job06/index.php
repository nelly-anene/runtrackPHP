<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job06 - Formulaire avec Styles</title>
    <?php
    // Check if a style was selected
    if(isset($_GET['style'])) {
        $style = $_GET['style'];
        echo '<link rel="stylesheet" href="' . $style . '.css">';
    } else {
        // Default style
        echo '<link rel="stylesheet" href="style1.css">';
    }
    ?>
</head>
<body>
    <div class="container">
        <h1>Choisissez votre style</h1>
        
        <form method="GET" action="">
            <label for="style">Sélectionnez un style:</label>
            <select name="style" id="style">
                <option value="style1">Style 1</option>
                <option value="style2">Style 2</option>
                <option value="style3">Style 3</option>
            </select>
            
            <button type="submit">Appliquer</button>
        </form>
    </div>
</body>
</html>