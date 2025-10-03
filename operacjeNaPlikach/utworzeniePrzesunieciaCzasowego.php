<?php
    // Utworzenie przesunięcia czasowego o tydzień do przodu  
    $now = time();
    $week = 7 * 24 * 60 * 60; // liczba sekund w tygodniu
    echo "<br>za tydzień: " . date("Y-m-d h:i:sa", $now + $week);
?>