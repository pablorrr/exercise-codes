<?php
header("Content-type:plain\text");
//make flatten multidimensional arr
$tmp = array( 'a' => array( -1,-2, 0, 2, 3 ), 'b' => array( 'c' => array( -1, 0, 2, 0, 3 ) ) ); 
$tmpr = array_values($tmp["a"]);
print_r($tmp);
$tmp = array( 'a' => array( -1,-2, 0, 2, 3 ), 'b' => array( 'c' => array( -1, 0, 2, 0, 3 ) ) ); 
$tmp = array_values($tmp["b"]);
$tmp = array_values($tmp[0]);
$newArr = array_merge($tmpr,$tmp);
print_r($newArr);
//combine two string list in one string list with unique values
$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";
// combine both lists with unique values only result is string not array
$result = implode("," , array_unique(array_merge(explode(",",$list1),explode(",", $list2))));
echo $result."\n";
//removing  duplicate MY SOLUTION DOESNT ACCEPT SECOIND PAARAM DEMANDING FROMTHE TASK!!!
//https://php.net/manual/en/function.array-unique.php
//array inique remove duplicates
if(!function_exists("removeSpecifiedDuplte")){
    function removeSpecifiedDuplte($arr){
        if(is_array($arr)){
            $duplArr = array_diff_assoc($arr, array_unique($arr));
            //Returns an array containing all the values from array1
            // that are not present in any of the other arrays.
            //Compares array1 against array2 and returns the difference.
            // Unlike array_diff() the array keys are also used in the comparison.
            //https://www.php.net/manual/en/function.array-diff-assoc
            return $duplArr;
        }
    }
}
$array = array(3, 2, 5, 3, 5,9);
print_r(removeSpecifiedDuplte($array));
/*
//unset usage in arrays
$array = array('apple', 'orange', 'strawberry', 'blueberry', 'kiwi');
unset($array[2]);
print_r($array);
$dupl=1;
$array = array(1, 2, 3,4,1, 5, 6);
foreach( $array as $key=>$val){
if($val === $dupl)
unset( $array[$key]) ;
}
print_r($array);*/
//PROPER SOLUTION FROM THE W3RESOURCE
function array_uniq($my_array, $value) 
{ 
    $count = 0; 
    foreach($my_array as $array_key => $array_value) 
    { 
        if ( ($count > 0) && ($array_value == $value) ) 
        { 
            unset($my_array[$array_key]); 
        } 
        if ($array_value == $value) $count++; 
    } 
    return array_filter($my_array); //accept callback as param . callback iterate array and check single value when its true then return this value to arr if not then //remove this value
} 
$numbers = array(4, 5, 6, 7, 4, 7, 8);
print_r(array_uniq($numbers, 7));
?>