<p>Tworzenie ciasteczka, które wygasa po 1 dniu (24 godziny).</p>
<?php
    $cookie_name = "user";
    $cookie_value = "John Doe";
    $cookie_expire = time() + (24 * 60 * 60); // 1 day from now
    setcookie($cookie_name, $cookie_value, $cookie_expire);
?>