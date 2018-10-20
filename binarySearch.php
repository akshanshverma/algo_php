<?php
    require("utility.php");
    /**
     * binary serach is read data from file save it into array and perform binary search 
     */

     //readFl to read the text ile and convert it into array 
    $arr = explode(" ",Utility::readFl("test.txt"));
    //sort the file because binary search can perfrom only on insertionSort
    $arr = Utility::insertionSort($arr);
    echo "enter word\n";
    //word which user want to search
    $word = trim(fgets(STDIN));
    //search and print true and false
    if (Utility::binarySearch($word,$arr)==-1) {
        echo "false\n";
    } else {
        echo "true\n";
    }   
?>