<?php
function bubbleSort(array $array): array { 
    $length = count($array); 

    for ($i = 0; $i < $length; $i++) { 
      for ($j = 0; $j < $length - 1; $j++) { 
          if ($array[$j] > $array[$j + 1]) { 
            $temp = $array[$j + 1]; 
            $array[$j + 1] = $array[$j]; 
            $array[$j] = $temp; 
          } 
      } 
    }     
    return $array; 
}

$arrayMixedNumbers = [-98, -78, 4567, 9023, 102332, 32, 10000000, 838, 0.0001, 0.01,3]; 
$sortedArray       = bubbleSort($arrayMixedNumbers); 
echo implode(", ", $sortedArray);
