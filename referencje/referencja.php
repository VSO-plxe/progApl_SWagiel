<p>Referencja jest to wskazanie na inną zmienną. W PHP referencje są tworzone za pomocą operatora & (ampersand).</p>

<?php
    $foo = 'Bob';
    $bar = &$foo; // $bar jest referencją do $foo
    $bar = 'Andy'; // zmienia wartość $foo na 'Andy'

    echo $bar; // wyświetli 'Andy'
    echo $foo; // również wyświetli 'Andy'
?>