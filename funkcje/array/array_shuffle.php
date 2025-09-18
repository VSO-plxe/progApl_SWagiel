<?php
    $a = array("red", "green", "blue", "yellow", "brown");
    print_r($a);
    echo "<br>";
    $potasowana = array_shuffle($a); // randomizes the order of the elements in the array
    print_r($potasowana);
?>