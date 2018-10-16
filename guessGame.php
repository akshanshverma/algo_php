<?php
/******************************************************************************
 * Purpose: guess the number with the help of Useing Binary Search to find the number
 *
 * @author Akshansh Verma
 * @version 1.0
 * @since 016-10-2018
 *
 ******************************************************************************/
    require("utility.php");
    class guessGame{
        /**
         * function guess is use to search the number 
         * 
         * @param $n is the limit of number 
         */
        function guess($n)
        {
            echo "enter 1 for true\n";
            echo "enter 2 for false\n";
        
            $low = 0;
            $hig = $n-1;
            $mid = 0;

            while($low <$hig)
            {
                //to find always mid value between low and high 
                $mid = (int)(($low + $hig)/2);
                echo "number is between ".$low." and ".$mid."\n";
                //user input for true and false 
                $tf = Utility::getInt();

                if($tf == 1)
                {
                    $hig = $mid;
                }
                elseif($tf == 2)
                {
                    $low = $mid +1;
                    $mid = (int)(($low + $hig)/2);
                }
                else
                {
                    echo " use 1 or 2 \n";
                }
            }
            echo "number is ".$mid;
        }    
    }
    echo "enter n\n";
    $n = Utility::getInt();
    guessGame::guess(2**n);
?>