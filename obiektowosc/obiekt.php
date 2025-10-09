<?php   // definicja klasy Fruit; obiekty będą tworzone na podstawie tej klasy
class Fruit {
    public $name;
    public $color;

    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}
    $apple = new Fruit();   // tworzenie obiektu (instancji klasy Fruit)
    $banana = new Fruit();  // tworzenie kolejnego obiektu (instancji klasy Fruit)
    $apple->set_name('Apple');
    $banana->set_name('Banana');
    echo $apple->get_name();         // wywołanie metody get_name() dla obiektu $apple
    echo "<br>";
    echo $banana->get_name();        // wywołanie metody get_name() dla obiektu $banana
?>