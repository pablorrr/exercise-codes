<?php
header("Content-type:plain\text");
/*Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.
Note : Do not use any PHP control statement.
prompt: range as [h[ function can create table with range , param1:min(start), param2(end), param3(step ,what the number should be increased(o jaka liczbe ma byc zwikszna liczba startowa ,default 1))
*/
$str = implode(" , ", range(200, 250, 4));
echo $str;
//example with strings
$str = implode(" , ", range("a", "z", 4));
echo $str;
//function example
function rangeGenerator($min, $max, $step){
    $output = implode(" , ", range($min, $max, $step));
    return $output;    
}
echo rangeGenerator(1,10,2);
?>