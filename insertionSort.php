<?php
    //take input from the file and convert it into array 
    require("utility.php");
    $arr = explode(" ",Utility::readFl("test.txt"));
    //call inertionSort of util class and pass array
    echo var_dump(Utility::insertionSort($arr));
?>