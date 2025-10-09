<p>Konstruktor jest automatycznie uruchamiany podczas tworzenia obiektu</p>
<?php  // konstruktor jest automatycznie uruchamiany podczas tworzenia obiektu
    class Fruit {
        public $name;
        public $color;

        // konstruktor - metoda wywoływana automatycznie podczas tworzenia obiektu
        function __construct($name) {
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }
    }
    $apple = new Fruit('Apple');    // tworzenie obiektu (instancji klasy Fruit) z nazwą 'Apple'
    echo $apple->get_name();        // wywołanie metody get_name() dla obiektu $apple
?>