<?php

    include("../ex03/d_split.php");
    if ($argc > 1)
    {
        $args = array_slice($argv, 1);
        $args = implode(" ", $args);
        $arr = d_split($args);
        print_r($arr);  
    }

?>