<?php

    for ($i = 0; $i < 1000; $i++)
    {
        $str= str_repeat('X', 100);
        echo wordwrap($str, 100, "\n", true) . "\n";
    }
?>