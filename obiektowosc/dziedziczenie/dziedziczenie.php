<?php
    class Fruit {
        public $name;
        public $color;

        // Constructor
        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        // Protected method
        protected function intro() {
            echo "The fruit is {$this->name} and the color is {$this->color}. ";
        }
    }

    class Strawberry extends Fruit {
        public function message() {
            echo "Am I a fruit or a berry? ";
        }
    }
    // Try to call all three methods from outside the class
    $strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public;    Tworzenie obiektu klasy Strawberry
    $strawberry->message(); // OK. message() is public
    $strawberry->intro(); // ERROR. intro() is protected
?>
