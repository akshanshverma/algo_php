<?php
    /**
     * to get input of two word which we want to check anagrams
     */
    require("util.php");
    echo "enter word\n";
    //1st word
    $str1 = trim(fgets(STDIN));
    echo "enter other word\n";
    //2nd word
    $str2 = trim(fgets(STDIN));
    //call anagram function
    if (Util::anagram($str1,$str2)) {
        echo "yes\n";
    } else {
        echo "no\n";
    }
?>