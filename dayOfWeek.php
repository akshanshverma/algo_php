<?php
    class DayOfWeek
    {
        function printDay($d,$m,$y)
        {
            $y0 = $y - floor((14 - $m) / 12)-1;
            $x = $y0 + floor($y0/4) - floor($y0/100) + floor($y0/400);
            $m0 = $m + 12 * floor((14 - $m) / 12) - 2;
            $d0 = ($d + $x + 31*floor($m0 / 12)) % 7;
            echo $d0."\n";
        }
    }
    DayOfWeek::printDay(16,10,2018);
?>