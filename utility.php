<?php
    class Utility
    {
        function binarySearch($n ,$arr)
        {
            //sort($arr);
            $low = 0;
            $hig = sizeof($arr)-1;
            $mid = 0;

            while($low <= $hig)
            {
                $mid = (int)($low + $hig)/2;
                //echo $mid."\n";
                if($arr[$mid] < $n)
                {
                    $low = (int)$mid + 1;
                } 
                else if ($arr[$mid] > $n)
                {
                    //echo "test\n";
                    $hig = (int)$mid -1;
                }
                else
                {
                    //echo "test2\n";
                    return (int)$mid;
                }
            }
            return -1;
        }
    }

    $arr = array(1,2,3,4,5,6);
    echo Utility::binarySearch(6,$arr)."\n";
?>