<?php

    class Util
    {
        /**
         * funtion anagram is to check all the element of string are same or not
         * 
         * @param string $str1 is or word
         * @param string $str2 is other word to check anagram
         * @return boolean true of flase
         */
        function anagram($str1,$str2)
        {
            //convert both string into array
            $ar1 = str_split($str1,1);
            $ar2 = str_split($str2,1);
            
            //for anagram size of both string should equal
            if(sizeof($ar1) == sizeof($ar2))
            {
                //forEach to access the value of $ar1 one by one
                foreach($ar1 as $del)
                {
                    //check the value in other array and save index
                    $index = array_search($del,$ar2);
                    //if value is present then it will remove that value from 2nd array
                    if($index !== false)
                    {
                        unset($ar2[$index]);
                    }              
                }
                //after foreach if size is zero then word is anagra else not anagram
                if (sizeof($ar2) == 0) 
                {
                    return true;
                } 
                else 
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
            
        }

        /**
         * function to print prime number between 0 to 1000
         * @return array $arr array of prime number 0 to 1000
         */
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
                    $arr[$index++] = (string)$i;
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
                //split into array 
                $tempArr = str_split($n);
                //temp to store last index
                $temp = sizeof($tempArr)-1;
                //echo $temp."\n";
                for($j = 0; $j < sizeof($tempArr)/2; $j++)
                {
                    //echo $tempArr[$j]."=".$tempArr[$temp]."\n";
                    //if the values are not same then it will return false 
                    if($tempArr[$j] != $tempArr[$temp])
                    {   //echo "<<"."\n";
                        return false;
                    }
                    $temp--;
                }
                //other wise true
                return true;
            }
            return false;            
        }

        /**
         * function main to perform the action with the help of anagram primeNumber palindrome
         */
        function main()
        {
            //get all the prime number 0 to 1000 and save it into array 
            $arr = Util::primeNumber();
            
            echo "anagram\n";
            //check all the anagram number of prime numbers
            for ($i=0; $i < sizeof($arr) ; $i++) 
            { 
                for ($j=$i+1; $j < sizeof($arr) ; $j++) 
                {
                    if (Util::anagram($arr[$i],$arr[$j])) {
                        echo $arr[$i]." ".$arr[$j]."\n";
                    }
                }
            }

            echo "\npalindrome\n";
            //check number are palindrome or not
            for ($i=0; $i < sizeof($arr); $i++) { 
                if (Util::palindrome((int)$arr[$i])) {
                    echo $arr[$i]."\n";
                }
            }
        }
    }   
    Util::main();
    
?>