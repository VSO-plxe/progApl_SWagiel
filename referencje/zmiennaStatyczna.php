    <?php
        function test() {
            static $licznik = 0; // zmienna statyczna
            echo $licznik . "<br>";
            $licznik++;
        }
        test(); // wyświetli 0
        test(); // wyświetli 1
        test(); // wyświetli 2
    ?>