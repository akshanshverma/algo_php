<?php
    require("utility.php");
    echo "enter temperature in celsius or fahrenheit (ex 45c)\n";
    utility::temperaturConversion(fgets(STDIN));
?>