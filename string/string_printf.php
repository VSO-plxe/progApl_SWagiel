<?php
    $tekst = "Hello";
    printf("[%s]\n", $tekst); // outputs [Hello]
    printf("[%10s]\n", $tekst); // outputs [     Hello]
    printf("[%-10s]\n", $tekst); // outputs [Hello     ]
    printf("[%.3s]\n", $tekst); // outputs [Hel]
    printf("[%10.3s]\n", $tekst); // outputs [       Hel]
    printf("[%-10.3s]\n", $tekst); // outputs [Hel       ]
?>