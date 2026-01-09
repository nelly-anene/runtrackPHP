<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Job07</title>
</head>
<body>
    <h2>Dessiner une maison</h2>

    <form method="POST">
        Largeur: <input type="text" name="largeur"><br>
        Hauteur: <input type="text" name="hauteur"><br>
        <input type="submit" value="Dessiner">
    </form>

    <br>

    <?php
    if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {

        $l = $_POST['largeur'];
        $h = $_POST['hauteur'];

        echo "<pre>";

        // toit
        $toit = $l / 2;
        for ($i = 0; $i < $toit; $i++) {

            for ($j = 0; $j < $toit - $i - 1; $j++) {
                echo " ";
            }

            if ($i == 0) {
                echo "/\\";
            } else {
                echo "/";
                for ($k = 0; $k < $i * 2; $k++) {
                    echo " ";
                }
                echo "\\";
            }

            echo "\n";
        }

        // corps de la maison
        for ($i = 0; $i < $h; $i++) {

            if ($i == 0 || $i == $h - 1) {
                for ($j = 0; $j < $l; $j++) {
                    echo "_";
                }
            } else {
                echo "|";
                for ($j = 0; $j < $l - 2; $j++) {
                    echo " ";
                }
                echo "|";
            }

            echo "\n";
        }

        echo "</pre>";
    }
    ?>
</body>
</html>

