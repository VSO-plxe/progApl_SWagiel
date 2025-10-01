<?php
    $filename ='/xampp/htdocs/bitnami.css';

    if(file_exists($filename)) {
        echo "Plik $filename istnieje";
    } else
        echo "Plik $filename nie istnieje";

    $filesize='anon.php';

    echo $filesize . ': ' . filesize($filesize) . 'bytes'; 
?>