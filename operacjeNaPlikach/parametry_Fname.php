<?php
    function familyname($fname) {
        echo "$fname Refsnes.<br>";
    }

    // wywołania funkcji
    familyname("Jani");
    familyname("Józek");
    familyname("Zbyszek");

    // funkcja modyfikująca zmienną przez referencję
    function add_some_extra(&$string) {
        $string .= ' and something extra.';
    }

    $str = 'This is string.';
    add_some_extra($str);

    echo $str;
?>