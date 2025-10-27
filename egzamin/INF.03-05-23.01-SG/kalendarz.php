<?php
$conn = new mysqli("localhost", "root", "", "kalendarz");
if (isset($_POST["event"])) {
    $event = $_POST["event"];
    $conn->query("UPDATE zadania SET wpis = \"$event\" WHERE dataZadania = \"2020-08-09\";");
}
$result = $conn->query("SELECT dataZadania, wpis FROM zadania WHERE miesiac = \"sierpien\";");
$conn->close();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sierpniowy kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header>
        <section class="h1">
            <h1>Organizer: SIERPIEŃ</h1>
        </section>
        <section class="h2">
            <form action="#" method="post">
                <label>Zapisz wydarzenie: <input type="text" name="event"></label>
                <button type="submit">OK</button>
            </form>
        </section>
        <section class="h3">
            <img src="logo2.png" alt="sierpień">
        </section>
    </header>
    <main>
        <!-- script -->
        <?php
        while ($row = $result->fetch_row()) {
            echo <<< END
                <section class="calendar">
                    <h5>$row[0]</h5>
                    <p>$row[1]</p>
                </section>
            END;
        }
        ?>
    </main>
    <footer>
        <p>Stronę wykonał: lkata</p>
    </footer>
</body>
</html>