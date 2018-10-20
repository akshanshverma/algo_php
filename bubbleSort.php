<?php
    /**
     * bubble sort is to read data from file and perform sorting 
     */
    require("utility.php");
    //read data and save into array
    $arr = explode(" ",Utility::readFl("test.txt"));
    //call bubbleSort for sortning and return sorted array
    echo var_dump(Utility::bubbleSort($arr));
?>