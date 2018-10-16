<?php
    require("util.php");
    echo "enter word\n";
    $ar1 = str_split(trim(fgets(STDIN)),1);
    echo "enter other word\n";
    $ar2 = str_split(trim(fgets(STDIN)),1);
    Util::anagram($ar1,$ar2);
?>