<?php
    require("decimalToBinary.php");
    /**
     * Purpose: swap the two nibbles then convert into decimal number and 
     * check it the the number is power of 2.
     *
     *  @author  Akshansh Verma
     *  @version 1.0
     *  @since   18-10-2018
     */
    class Binary
    {
        /**
         * function swap take binary number and swap the nibble of binary number 
         * 
         * @param $binaryNum input of binary number 
         * @return binary new binary number 
         */
        
        static function swap($binaryNum)
        {
            //split binary number
            $arr = str_split($binaryNum,4);

            //for loop to perfrom swap in the array
            for ($i=0; $i < sizeof($arr)/2; $i++) { 
                $temp = $arr[$i];
                $arr[$i] = $arr[$i +1];
                $arr[$i + 1] = $temp;
                $i++;
            }
            //return new binary number 
            return implode($arr);
        }

        /**
         * function toDecimal is take binary number is input and change it into decimal number
         * 
         * @param $binaryNum input of binary number
         * @return decimal number of binary number
         * 
         */
        static function toDecimal($binaryNum)
        {
            //$k is for add sum 
            //$j is for change the power of 2
            $k = 0; $j = 0;
            //split binary number into array 
            $arr = str_split($binaryNum);   
            //for loop to check the place or 1         
            for ($i = sizeof($arr)-1; $i >= 0 ; $i--) 
            { 
                //if get 1 then add the place power of one 
                if ((int)$arr[$i] == 1) {
                    $k = $k + 2**$j;
                }
                $j++;
            }
            
            return $k;
        }

        /**
         * function powerOfTwo is to check that the decimal number is power of two of not 
         * 
         * @param $num it take decimal number and check it 
         */
        static function powerOfTwo($num)
        {
            //$i to check the power one by one 
            $i = 0;

            //while loop until power of two is less then or equal to decimal number
            while((2**$i <= $num))
            {
                if($num == 2**$i)
                {
                    echo "yes\n";
                    return;
                }
                $i++;
            }
            echo "no\n";
            return;
        }

    }
    echo "enter int value\n";
    //get binary number 
    $binary = DecimalToBinary::toBinary(Utility::getInt());
    //swap the binary number
    $swapBinary = Binary::swap($binary);
    //convert binary number to decimal number
    $decimal = Binary::toDecimal((int)$swapBinary);
    //check it is power of two or not 
    Binary::powerOfTwo($decimal);
?>