<!-- Count the occurrence of each character in a string and print output in array format with each character in array format?
Ex- Input - str - “i am a string”
Output - [‘i’=> 2, ‘ ’ => 3, ‘a’ => 2, ‘m’ => 1, ‘s’ => 1]
Function findFrequesncy($str) {
// your code
Return freqArray;
} -->


<?php

    $myArray = [];

    function countString($a){

        for($i=0;$i<strlen($a);$i++){
            if(!array_key_exists($a[$i], $myArray)){
                $count = 0;
                for($j=0;$j<strlen($a);$j++){
                    if($a[$i] == $a[$j]){
                        $count++;
                    }
                }
                $myArray[$a[$i]] = $count;
            }
        }

        print_r($myArray);

    }

    countString("i am string");

?>
