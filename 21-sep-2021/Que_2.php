<!-- Delete duplicate Elements from array in sorted order - 
Ex - Input - [3,8,9,3,1,7,2, 8]
Output should be - [1,2,3,7,8,9] -->

<?php

    function sortMyArray($a){
        for($i=0;$i<sizeof($a);$i++){
            for($j=0;$j<sizeof($a)-1;$j++){
            if($a[$j]>$a[$j+1]){
                $temp = $a[$j];
                $a[$j] = $a[$j+1];
                $a[$j+1] = $temp;
            }
        }
        }
        return $a;
    }


    $b = sortMyArray([2,8,1,8,0,4]);

    print "This is sorted array\n";
    for($i=0;$i<sizeof($b);$i++){
        echo $b[$i]." ";
    }
    
    $uniqueArray = [];
    array_push($uniqueArray, $b[0]);
    $index = 0;

    for($i=1;$i<sizeof($b);$i++){

        if($b[$index] != $b[$i]){
            array_push($uniqueArray, $b[$i]);
            $index = $i;
        }

    }

    echo "\n";
    for($i=0;$i<sizeof($uniqueArray);$i++){
        echo $uniqueArray[$i]." ";
    }

?>