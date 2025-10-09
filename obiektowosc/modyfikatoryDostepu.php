<?php
    class Fruit {
        public $name;
        protected $color;
        private $weight;
}
    $mango = new Fruit();
    $mango->name = 'Mango';          // OK
    $mango->color = 'Yellow';        // BŁĄD: właściwość chroniona
    $mango->weight = 300;            // BŁĄD: właściwość prywatna
    echo $mango->name;
?>