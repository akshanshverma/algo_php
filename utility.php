<?php
    class Utility
    {
        static function binarySearch($n ,$arr)
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

        static function insertionSort($arr)
        {
            for($i = 1; $i < sizeof($arr); $i++)
            {
                $temp = $arr[$i];
                $k = $i - 1;

                while($k >= 0 && $arr[$k] > $temp)
                {
                    $arr[$k + 1] = $arr[$k];
                    $k--;
                }
                $arr[$k + 1] = $temp;
            }
            //echo var_dump($arr);
            return $arr;
        }

        static function bubbleSort($arr)
        {
            for($i = 0;$i < sizeof($arr);$i++)
            {
                for($j = 0;$j < sizeof($arr)-$i-1;$j++)
                {
                    echo 
                    $k = $j + 1;
                    if($arr[$j] > $arr[$k])
                    {
                        $temp = $arr[$j];
                        $arr[$j] = $arr[$k];
                        $arr[$k] = $temp;
                    }
                }
            }
            //echo var_dump($arr);
            return $arr;
        }

        static public function getInt()
       {
            fscanf(STDIN,"%d\n",$n);
            while(!is_numeric($n))
            {
                echo "enter numeric value"."\n";
                fscanf(STDIN,"%d\n",$n);
            }
            return $n;     
       }

       static function readFl($file)
       {
           $fileC = fopen($file,"r") or die("unable to open");

           return fread($fileC, filesize($file));
       }
    }

    
?>