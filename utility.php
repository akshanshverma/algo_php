<?php
    /**
     * 
     * Purpose: Utility is a helper class which hold funtion.
     *
     *  @author  Akshansh Verma
     *  @version 1.0
     *  @since   18-10-2018
     */
    class Utility
    {
        /**
         * function binarySearch is to perform binary search on array 
         * 
         * @param $n value which we want to search 
         * @param $arr in which wan to perform binary search 
         * @return index value of -1 
         */
        static function binarySearch($n ,$arr)
        {
            //$low $mid $hig to get low index mid index and hig index
            $low = 0;
            $hig = sizeof($arr)-1;
            $mid = 0;

            //while loop will work until low is less then hig
            while($low <= $hig)
            {
                //to find always mid value between low and high 
                $mid = (int)($low + $hig)/2;
                //if value is greater then mid index the low will become mid + 1
                if($arr[$mid] < $n)
                {
                    $low = (int)$mid + 1;
                } 
                //is value is less then mid index then hig become mid 
                else if ($arr[$mid] > $n)
                {
                    $hig = (int)$mid -1;
                }
                //else value is equal to mid and return mid index 
                else
                {
                    return (int)$mid;
                }
            }
            return -1;
        }
        
        /**
         * function insertionSort is to sort array with the help of insertion sort algorithm
         * 
         * @param $arr unsorted array
         * @return $arr sorted array
         */
        static function insertionSort($arr)
        {
            //for loop to get data from array one by one 
            for($i = 1; $i < sizeof($arr); $i++)
            {
                //save the value of array index into temp
                $temp = $arr[$i];
                //$k to hold previous value 
                $k = $i - 1;
                //while loop until temp value is less then index value of array  or 0 index 
                while($k >= 0 && $arr[$k] > $temp)
                {
                    //swap the index 
                    $arr[$k + 1] = $arr[$k];
                    $k--;
                }
                //after while loop get position of temp varible 
                $arr[$k + 1] = $temp;
            }
            //echo var_dump($arr);
            return $arr;
        }

        /**
         * function bubbleSort to perform bubble sort algorithm in array 
         * 
         * @param $arr unsorted array
         * @return $arr sorted array
         */
        static function bubbleSort($arr)
        {   
            //for loop to perform acction on every output
            for($i = 0;$i < sizeof($arr);$i++)
            {
                //for loop to sort value side by side
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

        /**
        * function getInt is method which take user input and 
        * check the input is numeric or not
        * @return $n int type value
        */
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

        /**
         * function read file is to read file and return in the form of string
         * 
         * @param file path
         * @return string data of file
         */
        static function readFl($file)
        {
            $fileC = fopen($file,"r") or die("unable to open");

            return fread($fileC, filesize($file));
        }

        /**
         * function temperaturConversion is to take temperature value and if value is
         * given in Celsius it will convert into Fahrenheit and if in Fahrenheit it will
         * convert into Celsius.
         * 
         * @param temp value of temperature
         */
        static function temperaturConversion($temp)
        {
            //remove f or c from the temp value and save it into $n as int
            $n = (int)substr($temp,0,strlen($temp)-1);
            echo $n."\n";
            // if temperature is in Celsius it will convert into Fahrenheit
            if(strpos($temp,"F")==true || strpos($temp,"f")==true)
            {
                echo (($n - 32) *(5 / 9))."c";

            }
            //else if temperature is in Fahrenheit it will convert into Celsius
            elseif (strpos($temp,"C")==true || strpos($temp,"c")==true) {
                echo (($n * 9 / 5) + 32)."f";
            }
        }

        /**
         * function monthlyPayment is to reads P, Y, and R and calculates the 
         * monthly payments where Y years to pay off a P principal loan amount 
         * at R per cent interest compounded monthly
         * 
         * @param $P principal loan amount
         * @param $Y years to pay off
         * @param $R percent interest compounded monthly
         */
        static function monthlyPayment($P,$Y,$R)
        {
                $n = 12 * $Y;
                $r = $R / (12 * 100);
                $pri = $P * $r / (1 - ((1 + $r)**(-$n)));
                echo $pri." Rs\n";        
        }

        static function sqrt($c)
        {
                $t = $c;
                $epsilon = 1e-15;
                while (abs($t - $c / $t) > $epsilon * $t) {
                    $t = (($c / $t) + $t) / 2;
                }
        }

        function printDay($d,$m,$y)
        {
            $y0 = floor($y - (14 - $m) / 12)+1;
            $x = floor($y0 + $y0/4 - $y0/100 + $y0/400);
            $m0 = $m + 12 * floor((14 - $m) / 12) - 2;
            $d0 = floor(($d + $x + floor((31*$m0) / 12)) % 7);
            return $d0;
        }

    }
    //utility::temperaturConversion(5000,2,5);

    
?>