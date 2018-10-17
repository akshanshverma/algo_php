<?php
    require("utility.php");
    echo "enter principal loan amount\n";
    $p = utility::getInt();
    echo "enter  percent interest compounded monthly\n";
    $r = utility::getInt();
    echo "enter years\n";
    $y = utility::getInt();

    $p = utility::monthlyPayment($p,$y,$r);
?>