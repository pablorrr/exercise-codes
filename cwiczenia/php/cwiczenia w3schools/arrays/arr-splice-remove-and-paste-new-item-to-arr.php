<?php
/*Write a PHP script that inserts a new item in an array in any position. Go to the editor
Expected Output :
Original array : 
1 2 3 4 5 
After inserting '$' the array is :
1 2 3 $ 4 5*/
header("Content-type:text/plain");
$origArr = array(1, 2, 3, 4, 5);
array_splice($origArr, 1,1,'ong');//notice arrplice works by referer with original array not copy
$origArr = array(1, 2, 3, 4, 5);
array_splice($origArr, 1,3,7);//notice arrplice works by referer with original array not copy
//NOTICE: DIFFERETN WORKS WITH STRING AND IN NUMERIC VALUE
print_r($origArr);
$input = array("red", "green", "blue", "yellow");
array_splice($input, 1,3,8);
// $input is now array("red", 8)
print_r($input);
$input = array("red", "green", "blue", "yellow");
array_splice($input, 1,3,"ORANGE");
// $input is now array("red", "ORANGE")
print_r($input);
$input = array("red", "green", "blue", "yellow");
array_splice($input, 2,-1,"ORANGE");
// $input is now array(red,"green", "ORANGE", yellow)
print_r($input);
//solution  w3reosurces
$original = array( '1','2','3','4','5' );
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
print_r($original);
?>