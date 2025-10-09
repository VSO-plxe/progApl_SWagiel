<?php
    $rok = date("Y");
    $miesiac = date("m");
    $dzien = date("d");
    echo "$dzien/$miesiac/$rok <br>"; // format DD/MM/RRRR

    echo "Today is " . date("Y/m/d") . "<br>"; // Y - rok (4 cyfry), m - miesiąc (01 do 12), d - dzień (01 do 31)
    echo "Today is " . date("l") . "<br>"; // l - pełna nazwa dnia tygodnia
?>