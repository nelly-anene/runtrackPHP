<?php
$boolVar = true;
$intVar = 42;
$stringVar = "Hello World";
$floatVar = 3.14;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Job 03</title>
    <style>
        table { border-collapse: collapse; width: 60%; margin: 20px auto; }
        th, td { border: 1px solid black; padding: 10px; text-align: left; }
        th { background-color: #4CAF50; color: white; }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo gettype($boolVar); ?></td>
                <td>boolVar</td>
                <td><?php echo $boolVar ? "true" : "false"; ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($intVar); ?></td>
                <td>intVar</td>
                <td><?php echo $intVar; ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($stringVar); ?></td>
                <td>stringVar</td>
                <td><?php echo $stringVar; ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($floatVar); ?></td>
                <td>floatVar</td>
                <td><?php echo $floatVar; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>