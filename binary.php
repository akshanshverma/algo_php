<?php
    require("utility.php");
    class Binary
    {
        
        static function swap($binaryNum)
        {
            $arr = str_split($binaryNum,4);

            for ($i=0; $i < sizeof($arr)/2; $i++) { 
                $temp = $arr[$i];
                $arr[$i] = $arr[$i +1];
                $arr[$i + 1] = $temp;
                $i++;
            }
            return implode($arr);
        }

        static function toDecimal($binaryNum)
        {
            $k = 0; $k = 0;
            $arr = str_split(1);
            for ($i = strlen($binaryNumbina)-1; $i >= 0 ; $i--) 
            { 
                if (condition) {
                    # code...
                }
            }
        }

    }
    $str = "akku";
    echo str_sear;
    //Binary::swap("10101111");
?>