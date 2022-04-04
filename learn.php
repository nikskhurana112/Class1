<?php
// $marks = [  50 , 59 , 94 , 48 , 49 ];
// $marks = [  50 , 59 , 94 , 48 , 49 ];
// // count function use for get the length of array
// for($i = 0 ; $i < count($marks)  ; $i++ )
// {
//      echo $marks[$i];
//      echo "<br>";
// }
$colsum = [
    [  18 , 31 , 50 , 90 , 20 ] ,     
    [  11 , 50 , 11 , 33 , 99 ] , 
    [  33 , 18 , 50 , 49 , 39 ] , 
    [  12 , 12 , 33 , 55 , 46 ]
];
// $sum = [0, 0, 0, 0,0];
for($col = 0 ; $col < 5 ; $col++)
{
    $sum = 0;
   for($row = 0 ; $row < 4 ; $row++)
   {
     $sum = $sum + $colsum[$col][$row];
   }
   echo $sum."<br>";
}

// for($i = 0; $i < count($sum); $i++)
// {
//     echo $sum[$i];
//     echo "<br>";
// }


// $colsum = [
//     [  18 , 31 , 50 , 90 , 20 ] ,     
//     [  11 , 50 , 11 , 33 , 99 ] , 
//     [  33 , 18 , 50 , 49 , 39 ] , 
//     [  12 , 12 , 33 , 55 , 46 ]
// ];
// $sum = [0, 0, 0, 0];
// for($j = 0 ; $j < 5 ; $j++)
// {
  
//    for($i = 0 ; $i < 4 ; $i++)
    
//         if($i % 2 == 0){
//             $sum[$i] = $sum[$i] + $colsum[$i][$j];
//         }
        
// }

// for($i = 0; $i < count($sum); $i++)
// {
//     echo $sum[$i];
//     echo "<br>";
// }
