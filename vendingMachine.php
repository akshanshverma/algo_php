<?php
    require("utility.php");
    /**
     * 
     * Purpose: vending machine is to check how many minimum note required to
     * complete that amount and total number of note
     *
     *  @author  Akshansh Verma
     *  @version 1.0
     *  @since   18-10-2018
     */
    class VendingMachine
    {
        //total number note needed
        static $total;
        /**
         * function cal is to calculate the note needed
         * 
         * @param $n is amount
         */
        function cal($n)
        {
            //if amount is 0 then it will break the function 
            if($n == 0)
            {
                return;
            }
            //array to store all notes 
            $money = array(1000,500,100,50,10,5,2,1);
            //temp to hold number of note of one amount is needed 
            $temp = 0;
            //for loop to check all note one by one 
            for($i = 0;$i < sizeof($money);$i++)
            {
                //if amount is greater or equals to amount  
                if( $n >= $money[$i])
                {   
                    //how many times amount by biggest money note
                    $temp = (int) ($n/$money[$i]);
                    //$n will store remaining amount
                    $n = $n % $money[$i];
                    //print note and number of note 
                    echo $money[$i]."rs =".$temp."\n";
                    //save to total note 
                    self::$total = self::$total+$temp;
                    //again call function cal and pass remaining amount
                    VendingMachine::cal($n);
                    return;
                }
            }
            return;            
        }
    }
    //get amount from the user 
    echo "enter money\n";
    VendingMachine::cal(Utility::getInt());
    echo VendingMachine::$total."\n";
?>