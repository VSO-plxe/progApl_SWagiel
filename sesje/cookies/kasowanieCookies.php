<p>Kasowanie ciasteczka poprzez ustawienie jego daty wygaśnięcia na czas przeszły.</p>
<?php
    $cookie_name = "user";
    setcookie($cookie_name, "", time() - 3600); // Ustawienie daty wygaśnięcia na godzinę temu
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named: '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
?>