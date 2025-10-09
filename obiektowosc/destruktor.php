<p> Destruktor jest automatycznie uruchamiany podczas usuwania obiektu </p>
<?php  // destruktor jest automatycznie uruchamiany podczas usuwania
    class Fruit {
        public $name;
        public $color;

        // konstruktor - metoda wywoływana automatycznie podczas tworzenia obiektu
        function __construct($name) {
            $this->name = $name;
        }

        // destruktor - metoda wywoływana automatycznie podczas usuwania obiektu
        function __destruct() {
            echo "Destruktor: Obiekt " . $this->name . " został usunięty.<br>";
        }
    }

    $apple = new Furit('Apple');    // tworzenie obiektu (instancji klasy Fruit) z nazwą 'Apple'
    echo $apple->get_name();        // wywołanie metody get_name() dla obiektu $apple
    echo "<br>";
    unset($apple);                  // ręczne usunięcie obiektu, co wywoła destruktor
?>