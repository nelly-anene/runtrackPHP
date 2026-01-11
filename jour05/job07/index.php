<form method="POST">
    <input type="text" name="txt">
    <select name="mode">
        <option value="gras">gras</option>
        <option value="cesar">cesar</option>
        <option value="plateforme">plateforme</option>
    </select>
    <input type="submit">
</form>

<?php

if (isset($_POST["txt"])) {
    $t = $_POST["txt"];
    $m = $_POST["mode"];

    if ($m == "gras") {
        $mots = explode(" ", $t);
        for ($i = 0; $i < count($mots); $i++) {
            if ($mots[$i][0] >= "A" && $mots[$i][0] <= "Z") {
                echo "<b>".$mots[$i]."</b> ";
            } else {
                echo $mots[$i]." ";
            }
        }
    }

    if ($m == "cesar") {
        for ($i = 0; $i < strlen($t); $i++) {
            echo chr(ord($t[$i]) + 2);
        }
    }

    if ($m == "plateforme") {
        $mots = explode(" ", $t);
        for ($i = 0; $i < count($mots); $i++) {
            if (substr($mots[$i], -2) == "me") {
                echo "_ ";
            } else {
                echo $mots[$i]." ";
            }
        }
    }
}
?>
