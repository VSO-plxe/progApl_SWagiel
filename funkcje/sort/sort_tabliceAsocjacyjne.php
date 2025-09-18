<?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    asort($age);    // sort associative arrays in ascending order
                    // according to the value;      arsort() -> reverse
                    // output:
                    //      Key = Peter, Value = 35
                    //      Key = Ben, Value = 37
                    //      Key = Joe, Value = 43

    ksort($age);    // sort associative arrays in ascending order
                    // according to the key;        krsort() -> reverse
                    // output:
                    //      Key = Ben, Value = 37
                    //      Key = Joe, Value = 43
                    //      Key = Peter, Value = 35
?>