<?php
$nb = 0;

if (isset($_COOKIE["nbvisites"])) {
    $nb = (int)$_COOKIE["nbvisites"];
}

if (isset($_POST["reset"])) {
    $nb = 0;
} else {
    $nb = $nb + 1;
}

// setcookie doit être avant tout HTML
setcookie("nbvisites", (string)$nb, time() + 3600);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Job02</title>
</head>
<body>
  <p>Nombre de visites (cookie) : <?php echo $nb; ?></p>

  <form method="post">
    <button type="submit" name="reset">reset</button>
  </form>
</body>
</html