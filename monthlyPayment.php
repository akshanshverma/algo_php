<?php
    //get user input of principal percent and year
    require("utility.php");
    echo "enter principal loan amount\n";
    $p = utility::getInt();
    echo "enter  percent interest compounded monthly\n";
    $r = utility::getInt();
    echo "enter years\n";
    $y = utility::getInt();
    //call function monthlyPayment
    $p = utility::monthlyPayment($p,$y,$r);
?>