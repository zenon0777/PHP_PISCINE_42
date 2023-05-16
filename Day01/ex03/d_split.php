<?php

function d_split($str)
{
    $chuncks = preg_split("/(\s+)/", $str);
    sort($chuncks);
    return($chuncks);
}

?>