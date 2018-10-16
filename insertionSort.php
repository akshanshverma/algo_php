<?php
    require("utility.php");
    $arr = explode(" ",Utility::readFl("test.txt"));
    echo var_dump(Utility::insertionSort($arr));
?>