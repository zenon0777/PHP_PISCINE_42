<?php

    if($argc > 1){
        $args = array_slice($argv, 1);
        $args = implode(" ", $args);
        $chuncks = preg_split("/(\s+)/", $args);
        $first_element = array_shift($chuncks);
        $last = array_pop($chuncks);
        array_push($chuncks, $first_element);
        $args = implode(" ", $chuncks);
        echo $args;
        echo PHP_EOL;
    }
?>