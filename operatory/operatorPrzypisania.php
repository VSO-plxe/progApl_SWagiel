<?php
    $a = 3;
    $b = &$a; // operator przypisania referencji

    print "$a\n"; // 3
    print "$b\n"; // 3

    $a = 4;
    print "$a\n"; // 4
    print "$b\n"; // 4
?>