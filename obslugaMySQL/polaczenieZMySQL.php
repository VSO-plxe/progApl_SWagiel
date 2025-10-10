<?php // podstawowe polaczenie z MySQL i tworzenie bazy danych
    $servername = "localhost"; //lokalny serwer
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
    
    // Tworzenie bazy danych
    $sql = "CREATE DATABASE $database";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully <br>";
    } else {
        echo "Error creating database: " . mysqli_error($conn . "<br>");
    }

    // Połączenie z konkretną bazą danych
    if (mysqli_select_db($conn, $database)) {
        echo "Connected to database successfully <br>";
    } else {
        echo "Error connecting to database: " . mysqli_error($conn) . "<br>";
    }

    // Tworzenie tabeli
    $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    if (mysqli_query($conn, $sql)) {
        echo "Table MyGuests created successfully <br>";
    } else {
        echo "Error creating table: " . mysqli_error($conn) . "<br>";
    }

    // Wstawianie danych do tabeli
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
            VALUES ('John', 'Doe', 'john@example.com')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully <br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }

    // Wstawianie wielu rekordów
    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES 
            ('Mary', 'Moe', 'mary@example.com')";
    $sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES 
            ('Julie', 'Dooley', 'julie@example.com')";
    if (mysqli_multi_query($conn, $sql)) {
        echo "New records created successfully <br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }

    // Pobieranie danych z tabeli
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Wyświetlanie danych z każdej kolumny
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 results <br>";
    }
?>