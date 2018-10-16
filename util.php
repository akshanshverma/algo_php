<?php
    class Util
    {
        function anagram($ar1,$ar2)
        {
            
            if(sizeof($ar1 == $ar2))
            {
                foreach($ar1 as $del)
                {
                    $index = array_search($del,$ar2);
                    if($index !== false)
                    {
                        unset($ar2[$index]);
                    }              
                }
                if (sizeof($ar2) == 0) 
                {
                    echo "anagram\n";
                } 
                else 
                {
                    echo "nop\n";
                }
            }
            else
            {
                echo "nop\n";
            }
            
        }

        function primeNumber()
        {
            $arr = array();
            $index = 0;
            /*
            * for loop initialize from 2 because 0 and 1 are not prime number
            */
            for ($i = 2; $i < 1000; $i++) {
                /*
                * for loop to check that number is divisible by any other number or not if it
                * is divisible by any other number then loop will break and return false
                */

                $b = true;
                for ($j = 2; $j <= $i / 2; $j++) {
                    if ($i % $j == 0) {
                        $b = false;
                        break;
                    }
                }
                /*
                * if number is divisible by only one and itself the it will add to ArrayList
                */
                if ($b == true) {
                    $arr[$index++] = $i;
                    //echo $i."\n";
                }
            }  
            return $arr; 
        }

        /**
	    * function to check number is palindrome or not
	    * 
	    * @param n int to pass number which we want to check
	    * @return true or false that number is palindrome or not
	    */
        function palindrome($n)
        {
                
                if($n > 9)
                {
                    $tempArr = str_split($n);
                    $temp = sizeof($tempArr)-1;
                    echo $temp."\n";
                    for($j = 0; $j < sizeof($tempArr)/2; $j++)
                    {
                        echo $tempArr[$j]."=".$tempArr[$temp]."\n";
                        if($tempArr[$j] != $tempArr[$temp])
                        {   echo "<<"."\n";
                            return false;
                        }
                        $temp--;
                    }
                    return true;
                }
                return false;
            
        }

    }   
    
    
?>