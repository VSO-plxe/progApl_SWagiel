<?php // podstawowe polaczenie z MySQL i tworzenie bazy danych
    $servername = "localhost"; // lokalny serwer
    $username = "root"; // Zmień na swoją nazwę użytkownika | domyślnie root
    $password = ""; // Zmień na swoje hasło | domyślnie puste

    // Tworzenie połączenia
    $conn = mysqli_connect($servername, $username, $password);

    // Sprawdzanie połączenia
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error() . "<br>");
    }
    echo "Connected successfully <br>";

    $database = "goetel"; // nazwa bazy danych
    /*
    // Tworzenie bazy danych
    $sql = "CREATE DATABASE $database";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully <br>";
    } else {
        echo "Error creating database: " . mysqli_error($conn . "<br>");
    }
*/
    // Połączenie z konkretną bazą danych
    if (mysqli_select_db($conn, $database)) {
        echo "Connected to database successfully <br>";
    } else {
        echo "Error connecting to database: " . mysqli_error($conn) . "<br>";
    }
/*
    // Tworzenie tabeli
    $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    );";
    if (mysqli_query($conn, $sql)) {
        echo "Table MyGuests created successfully <br>";
    } else {
        echo "Error creating table: " . mysqli_error($conn) . "<br>";
    }
*/
    // Wstawianie danych do tabeli
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
            VALUES ('John', 'Doe', 'john@example.com');";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully <br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }
/*  Problematyczne od PHP v8 - zamiast mysqli_multi_query używać mysqli_query
    // Wstawianie wielu rekordów
    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES 
            ('Mary', 'Moe', 'mary@example.com');";
    $sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES 
            ('Julie', 'Dooley', 'julie@example.com');";
    if (mysqli_multi_query($conn, $sql)) {
        echo "New records created successfully <br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }

    // Wyczyść pozostałe wyniki z multi_query (od PHP v8 - polecenie potrzebne do wykonania mysli_multi_query)
    while (mysqli_more_results($conn) && mysqli_next_result($conn));
*/
    // Pobieranie danych z tabeli           
    $sql = "SELECT id, firstname, lastname FROM MyGuests;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Wyświetlanie danych z każdej kolumny
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 results <br>";
    }

    $result = mysqli_query($conn, $sql);    // ponowne wykonanie zapytania poprzednie zostało "zużyte"
    if (mysqli_num_rows($result) > 0) {
        // sposób 2 - wyświetlanie danych z każdej kolumny
        while($row = mysqli_fetch_row($result)) {
            echo "id: " . $row[0]. " - Name: " . $row[1]. " " . $row[2]. "<br>";
        }
    } else {
        echo "0 results <br>";
    }

    // Generowanie danych jako tabela HTML
    $result = mysqli_query($conn, $sql);    // ponowne wykonanie zapytania poprzednie zostało "zużyte"
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        while($row = mysqli_fetch_row($result)) {
            echo "<tr><td>" . $row[0]. "</td><td>" . $row[1]. " " . $row[2]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results <br>";
    }

    // Generowanie listy HTML
    $result = mysqli_query($conn, $sql);    // ponowne wykonanie zapytania poprzednie zostało "zużyte"
    if (mysqli_num_rows($result) > 0) {
        echo "<ul>";
        while($row = mysqli_fetch_row($result)) {
            echo "<li>" . $row[0]. " - " . $row[1]. " " . $row[2]. "</li>";
        }
        echo "</ul>";
    } else {
        echo "0 results <br>";
    }

    // Usuwanie rekordu z tabeli
    $sql = "DELETE FROM MyGuests WHERE id=3;";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully <br>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn) . "<br>";
    }

    // Aktualizowanie rekordu w tabeli
    $sql = "UPDATE MyGuests SET lastname='Smith' WHERE id=2;";
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully <br>";
    } else {
        echo "Error updating record: " . mysqli_error($conn) . "<br>";
    }

    // Limit - pobieranie pierwszych 2 rekordów
    $sql = "SELECT * FROM MyGuests LIMIT 2;";

    // Limit - pobieranie rekordów od 13 do 15
    $sql = "SELECT * FROM MyGuests LIMIT 3 OFFSET 12;";

    // Zamknięcie połączenia
    mysqli_close($conn);
?>