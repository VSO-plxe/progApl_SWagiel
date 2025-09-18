<?php
    $a = array("a"=>"red", "b"=>"green");
    array_unshift($a, "blue"); // adds one or more elements to the beginning of the array
                                 // output: ["blue", "red", "green"]
    print_r($a); // output Array ( [0] => blue [a] => red [b] => green )
?>