<!-- Create Empty array and show an example & how to get the number of elements from the array? -->

<?php
  
  function myFunction($a){
    echo $a." ";
}

$b = [1,8,8,9,3];

array_map("myFunction",$b);
echo "\n";

for($i=0;$i<sizeof($b);$i++){
  echo $b[$i]." ";
}

?>