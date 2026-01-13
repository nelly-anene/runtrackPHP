<?php
session_start();

if (!isset($_SESSION["nbvisites"])) {
    $_SESSION["nbvisites"] = 0;
}

if (isset($_POST["reset"])) {
    $_SESSION["nbvisites"] = 0;
} else {
    $_SESSION["nbvisites"] = $_SESSION["nbvisites"] + 1;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Job01</title>
</head>
<body>
  <p>Nombre de visites (session) : <?php echo $_SESSION["nbvisites"]; ?></p>

  <form method="post">
    <button type="submit" name="reset">reset</button>
  </form>
</body>
</html>