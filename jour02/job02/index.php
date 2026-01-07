<?php
$exclusions = [26, 37, 88, 1111];
$i = 0;
for ($i = 0; $i <=1337 ; $i++) { 
    if (!in_array($i, $exclusions, true)){
        echo ("$i  <br/> ");
    }
}
?>