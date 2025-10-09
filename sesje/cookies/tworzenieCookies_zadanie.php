<?php // utworzenie cookie o nazwie "uczen" i wartości "Sebastian" ważnego przez 22 dni od uruchomienia PHP
    $nazwa_cookie = "uczen";
    $wartosc_cookie = "Sebastian";
    $data_waznosci = time() + (22*24*60*60); // 22 dni od teraz
    setcookie($nazwa_cookie, $wartosc_cookie, $data_waznosci);
    echo "Cookie o nazwie: '" . $nazwa_cookie . "' zostało ustawione!<br>";
?>