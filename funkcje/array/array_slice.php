<?php
    $a = array("red", "green", "blue", "yellow", "brown");
    print_r(array_slice($a, 2)); // output Array ( [0] => blue [1] => yellow [2] => brown )
?>


<?php
    $a = array("red", "green", "blue", "yellow", "brown");
    print_r(array_slice($a, -2,1)); // output Array ( [0] => yellow )
?>