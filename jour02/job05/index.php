<?php   
//boucle de 2 à 1000
for ($nombre = 2; $nombre <= 1000; $nombre++) {
    //comme le nombre est premier
    $estPremier = true;

    //verification de diviseurs de 2 jusqu" à rc
    for ($diviseurs = 2; $diviseurs <= sqrt($nombre); $diviseurs++) {
    //si le reste est 0, donc pas Premier alors
    if ($nombre % $diviseurs == 0) {
        $estPremier = false; 
        break; //pas besoin de continuer , on arrête
    }
}

//si ecore Premier on l'affiche
    if ($estPremier) {
        echo $nombre . "<br>"; //pour une nouvelle ligne
    }
}

?>