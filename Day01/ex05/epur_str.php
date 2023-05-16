<?php
if ($argc > 1){
    $new = trim($argv[1]);
    $new = preg_replace("/(\s+)/", ' ', $new);
    print_r($new);}
?>