<?php
    require("utility.php");
    class DecimalToBinary
    {
        static function toBinary($num)
        {
            $st = "";
            while ($num > 0) 
            {
                $temp = $num % 2;
                $st = $temp.$st;
                $num = (int)($num / 2);                
            }
            echo $st."\n";
            if ((strlen($st)%4) != 0) {
                $temp = strlen($st)%4;
                for ($i=0; $i < 4-$temp ; $i++) { 
                    $st = '0'.$st;
                }
            }
            return $st;
        }
    }
    echo "enter number to convert\n";
    $num = utility::getInt();
    DecimalToBinary::toBinary($num);
    
?>