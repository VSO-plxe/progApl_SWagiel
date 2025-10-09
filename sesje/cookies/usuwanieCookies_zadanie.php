<?php // usuwanie cookie
    $nazwa_cookie = "uczen";
    setcookie($nazwa_cookie, "", time() - 3600); // ustawienie daty ważności w przeszłości
    echo "Cookie o nazwie: '" . $nazwa_cookie . "' zostało usunięte!<br>";
?>