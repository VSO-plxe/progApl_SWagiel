<?php
    $hour = date("H"); // pobiera aktualną godzinę w formacie 24-godzinnym (00 do 23)

    if ($hour < 20) {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
?>