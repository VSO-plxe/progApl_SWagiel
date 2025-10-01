<?php
    for($i=0; $i<10; $i++)
    {
        echo "liczba: $i<br>";
        if($i==5)
            break;
    }
    echo "koniec petli <br>";

    for($x=0; $x<10; $x++)
    {

        if($x==5)
            continue; //przerywa obecną iterację i rozpoczyna kolejną iterację
        echo "liczba $x<br>";
    }
    echo "koniec petli<br>";

    goto a;
    echo "pierwszy tekst";
    a: 
    echo "drugi tekst";
?>