<?php
    while(!feof(STDIN))
    {
        echo("Enter a number: ");
        $nb = fgets(STDIN);
        $nb = trim($nb);
        if (is_numeric($nb) === true) 
        {
            if ($nb % 2  === 0)
                echo("The number $nb is even\n");
            else if ($nb % 2 === 1)
                echo("The number $nb is odd\n");
        
        }
        else
            echo "'$nb'" . " is not a number\n";
    }
    echo "\n";
?>