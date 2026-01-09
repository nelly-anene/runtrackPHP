<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Job06</title>
</head>
<body>
    <h2>Pair ou Impair</h2>

    <form method="GET">
        Nombre: <input type="text" name="nombre"><br><br>
        <input type="submit" value="Verifier">
    </form>

    <br>

    <?php
    if (isset($_GET['nombre'])) {

        $n = $_GET['nombre'];

        // Petit contrôle simple : on accepte seulement les entiers >= 0
        $temp = $n;

        // On retire 2 jusqu'à arriver à 0 (pair) ou 1 (impair)
        while ($temp > 1) {
            $temp = $temp - 2;
        }

        if ($temp == 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    }
    ?>

</body>
</html>
