<?php
    echo "<h3>Postincrement</h3>";
    $a = 5;
    echo "Should be 5: " . $a++ . "<br>\n"; // 5
    echo "Should be 6: " . $a . "<br>\n"; // 6

    echo "<h3>Preincrement</h3>";
    $b = 5;
    echo "Should be 6: " . ++$b . "<br>\n"; // 6
    echo "Should be 6: " . $b . "<br>\n"; // 6
?>