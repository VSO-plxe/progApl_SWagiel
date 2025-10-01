<?php
    echo preg_replace_callback('~-([a-z])~', function($match){
        return strtoupper($match)[1];
    }
    ,'hello');

    function setHeight($minheight = 50){
        echo "the height is : $minheight
        <br>";
    }
    setHeight(350);
    setHeight();

    $y=1;
    $fn1=fn($x) =>$x+$y;
    echo $fn1(3);
?>