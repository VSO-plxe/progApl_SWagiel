<?php
    $plik = fopen("owoce.csv", "r");
    $wiersz=fgets($plik);
    $owoce = explode(",", $wiersz); //zamienia string na tablicę
    foreach($owoce as $owoc){
        echo $owoc."<br>";
    }
var_dump($owoce);
?>