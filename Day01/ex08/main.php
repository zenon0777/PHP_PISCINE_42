<?PHP
    include("d_is_sort.php");
    $tab = array("!/@#;^", "42", "Hello World", "hi", "zZzZzZz");
    //$tab[] = "What are we doing now ?";
    if (!d_is_sorted($tab))
        echo "The array is sorted\n";
    else
        echo "The array is not sorted\n";

    
?>