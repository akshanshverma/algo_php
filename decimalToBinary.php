<?php
    require("utility.php");
    /**
     * Purpose: take decimal number convert it into binary number and 
     * change binary number into multipal of 4
     *
     *  @author  Akshansh Verma
     *  @version 1.0
     *  @since   18-10-2018
     */
    class DecimalToBinary
    {
        /**
         * function to binary convert decimal number to binary number 
         * and change it into multipal of 4
         * 
         * @param $num decimal number 
         * @return binary number 
         */
        static public function toBinary($num)
        {
            //empty var to hold binary number 
            $st = "";
            //while loop to store reminder one by one
            while ($num > 0) 
            {
                $temp = $num % 2;
                $st = $temp.$st;
                $num = (int)($num / 2);                
            }
            
            //if number size is not multipal of 4 the add zero 
            if ((strlen($st)%4) != 0) {
                //temp for how many zero needed
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
    echo DecimalToBinary::toBinary($num)."\n";
    
?>