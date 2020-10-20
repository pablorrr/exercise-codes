<?php
header("Content-type:plain\text");
// Write a PHP program to remove duplicate values from an array which contains only strings or only integers.
function arr_unique ($array){
    foreach ($array as $element){
        if(is_string($element)|| is_integer($element))
            $flag = true;
        else{
            $flag = false;
            break;}
    }
    if ($flag === true){
        $newArr = array_unique($array);
        return $newArr;
    }
    else 
        echo "element must be an int or string type";
}
$arr = array("one", "two",2,2,"two","three", "four");
print_r(arr_unique($arr));

//w3resources solution


$colors = array( 
  0 => 'Red', 
  1 => 'Green', 
  2 => 'White', 
  3 => 'Black', 
  4 => 'Red', 
); 

$numbers = array( 
  0 => 100, 
  1 => 200, 
  2 => 100, 
  3 => -10, 
  4 => -10, 
  5 => 0, 
); 
$uniq_colors = array_keys(array_flip($colors)); 
$uniq_numbers = array_keys(array_flip($numbers)); 
print_r($uniq_colors);
print_r($uniq_numbers);
?>