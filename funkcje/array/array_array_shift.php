<?php
    $a = array("a"=>"red", "b"=>"green", "c"=>"blue");
    echo array_shift($a) . "<br>"; // removes the first element of the array
    print_r($a); // output Array ( [b] => green [c] => blue )
?>