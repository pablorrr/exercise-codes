<?php
/*$color = array('white', 'green', 'red'') Go to the editor
Write a PHP script which will display the colors in the following way : 
Output : 
white, green, red,

green
red
white*/


$color = array('white', 'green', 'red');

header("Content-type:text\plain");
function sorterArray($arr){
sort($arr);
return $arr;
}

print_r(sorterArray($color));
//echo PHP_EOL;

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
    "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki",
    "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
    "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid",
    "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia",
    "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
    "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta",
    "Austria" => "Vienna", "Poland"=>"Warsaw") ;


/*Create a PHP script which displays the capital and country name from the above array $ceu. Sort the list by the capital of the country. Go to the editor

Sample Output :
The capital of Netherlands is Amsterdam 
The capital of Greece is Athens 
The capital of Germany is Berlin */

function sortAssoc($arr){
    asort($arr);
    return $arr;
}

print_r(sortAssoc($ceu));

$x = array(1, 2, 3, 4, 5);
/*Delete an element from the above array. After deleting the element, integer keys must be normalized.*/

function normalizeIndex($arr,$posToUnset){
    if ($posToUnset<count($arr)-1){
    unset($arr[$posToUnset]);
    $newArr =array_values($arr);
    return $newArr;
}
    else
        die();
}    
 print_r(normalizeIndex($x,0));
   
  /*$color = array(4 => 'white', 6 => 'green', 11=> 'red');
Write a PHP script to get the first element of the above array. Go to the editor
Expected result : white*/

function firstEl($arr){

    $firstEl= reset($arr);//ustawi  index na eleemnecie 0
    return $firstEl;
}
$color = array(4 => 'white', 6 => 'green', 11=> 'red');

print_r(firstEl($color));

    
    







?>