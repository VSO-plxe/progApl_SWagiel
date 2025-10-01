<?php
    $myfile = fopen("t.txt", "r") or die("Unable to open file!");
    echo fread($myfile, filesize("t.txt"));
    fclose($myfile);
    echo "<br>";

    $myfile1 = fopen("t.txt", "r") or die("Unable to open file!");
    echo fgets($myfile1);
    fclose($myfile1);
    echo "<br>";
    $myfile2 = fopen("t.txt", "w") or die("Unable to open file!");
    $txt="Sebastian Wągiel\n";
    fwrite($myfile2, $txt);
    fclose($myfile2);
    echo "<br>";
?>