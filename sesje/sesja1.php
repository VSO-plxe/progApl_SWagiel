<?php
    // Plik sesji nr 1
    session_start(); // rozpoczęcie sesji

    echo 'Welcome to my page #1';

    // ustawienie zmiennej sesyjnej
    $_SESSION['favcolor'] = 'blue';
    $_SESSION['animal'] = 'dog';
    $_SESSION['time'] = time();
    
    echo 'Dzisiaj mamy: ' . $_SESSION['data'] . '<br>'; // zdefiniowana zmienna sesyjna z sesji nr 2
    
    echo '<br><a href="sesja2.php">Strona 2</a><br>';
?>