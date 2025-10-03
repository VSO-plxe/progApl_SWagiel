<?php
    // Strona sesji nr 2

    session_start(); // kontynuacja sesji

    echo 'Welcome to my page #2 <br>';

    // odczytanie zmiennych sesyjnych
    echo 'Ulubiony kolor to: ' . $_SESSION['favcolor'] . '<br>';
    echo 'Ulubione zwierzę to: ' . $_SESSION['animal'] . '<br>';
    echo date('Y-m-d H:i:s', $_SESSION['time']) . '<br>'; // formatowanie czasu z sesji

    // deklaracja zmiennych do pliku sesji nr 1
    $_SESSION['data'] = date('d.m.Y'). '<br>';

    echo '<br><a href="sesja1.php">Strona 1</a><br>';

    echo $_SESSION['test']; // niezdefiniowana zmienna sesyjna
?>