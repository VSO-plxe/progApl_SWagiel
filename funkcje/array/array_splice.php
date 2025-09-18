<?php
    $a1 = array(0,1,2,3);
    $a2 = array(5,6);
    array_splice($a1, 1, 0, $a2); // 1 oznacza pozycje, 0 oznacza dodawanie elementów
    print_r($a1); // output Array ( [0] => 0 [1] => 5 [2] => 6 [3] => 3 )
?>