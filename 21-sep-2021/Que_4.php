<!-- How to find all the unique pairs of integer array whose sum is equal to a given number?
    Ex - input - array = [1,4,8,9,2,5,7,-1, -7, 17]
         Number - 10
         Output - [1,9], [2, 8] , [-7, 17]and all other possible combinations
    Complete function 
Function findAllPairs(array, num) {
    // your code
    Return allPairs;
} -->

<?php

    function pairSum($a, $no){
      
        for($i=0;$i<sizeof($a)-1;$i++){

            for($j=$i+1;$j<sizeof($a);$j++){

                if(($a[$i]+$a[$j]) == $no){
                    
                    echo "[".$a[$i].",".$a[$j]."] ";
                }
            }
        }
    }

    pairSum([1,4,8,9,2,5,7,-1, -7, 17],10);

?>