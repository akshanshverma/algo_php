<?php
    require("utility.php");
    
    $arr = explode(" ",Utility::readFl("test.txt"));
    $arr = Utility::insertionSort($arr);
    echo "enter word\n";
    $word = trim(fgets(STDIN));
    
    if (Utility::binarySearch($word,$arr)==-1) {
        echo "false\n";
    } else {
        echo "true\n";
    }   
?>