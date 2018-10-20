<?php
    require("utility.php");
    //get user input of temperature
    echo "enter temperature in celsius or fahrenheit (ex 45c)\n";
    //call function temperaturConversion
    utility::temperaturConversion(fgets(STDIN));
?>