<?php

    include("../ex03/d_split.php");
    if ($argc > 1)
    {
        $args = array_slice($argv, 1);
        $args = implode(" ", $args);
        $arr = d_split($args);
        $sort = sort ($arr, SORT_FLAG_CASE | SORT_NUMERIC | SORT_ASC);
        print_r($sort);  
    }

?>