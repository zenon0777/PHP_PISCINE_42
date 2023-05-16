<?php

    function d_is_sorted($arr)
    {
        $itter = count($arr);
        for($i = 0; $i < $itter; $i++)
            if ($i > 0 && ($arr[$i] < $arr[$i-1]))
                return false;
        return true;
    }
?>