<?php
    /**
     * Purpose: to check the day of date 
     *
     *  @author  Akshansh Verma
     *  @version 1.0
     *  @since   18-10-2018
     */
    
    require ("utility.php");
    echo "enter day\n";
    $d = Utility::getInt();
    echo "enter month\n";
    $m = Utility::getInt();
    echo "enter year\n";
    $y = Utility::getInt(); 
    $arr = array("sun","mon","tue","wed","thu","fri","sat");
    echo $arr[Utility::printDay($d,$m,$y)];
?>