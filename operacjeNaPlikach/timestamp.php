<?php
    // mktime(hour, minute, second, month, day, year);

    $czas = mktime(11, 11, 3, 10, 2, 2025);
    echo "Created date is " . date("Y-m-d h:i:sa", $czas);
    
    // zamiana daty na timestamp
    $data = "2025-10-02 11:11:03";
    $timestampDlaDaty = strtotime($data);
    echo "<br>Timestamp for date $data is: " . $timestampDlaDaty;

    // zamiana timestamp na datę
    $HS_timestamp = "1757948205";
    echo "<br>Date for timestamp $HS_timestamp is: " . date("Y-m-d h:i:sa", $HS_timestamp);

    $timestamp = time();
    echo "<br>Current timestamp is: " . $timestamp;
?>