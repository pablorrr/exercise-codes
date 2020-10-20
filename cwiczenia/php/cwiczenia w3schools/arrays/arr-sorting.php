<?php
/*Write a PHP script to sort the following associative array : Go to the editor
array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in 
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key
trnasform examples into  functions body usage and invoking
*/
header("Content-type:plain\text");
$arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($arr);//works with original array and return modified array
/*foreach ($arr as $key => $val) {
echo "$key = $val\n";
}*/
print_r($arr);
//ascending value numeric and assoc
$arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
$numArr = array(1,2,3,4,5,6,7,8,9);
ksort($numArr); 
print_r($numArr);
//descending assoc value
$arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
arsort($arr); 
print_r($arr);
//descending assoc accirding witth key
$arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
krsort($arr); 
print_r($arr);
//sort numeric asc
$numArr = array(1,2,3,4,5,6,7,8,9);
sort($arr); 
print_r($arr);
//sort numeric arr desc
$numArr = array(1,2,3,4,5,6,7,8,9);
rsort($arr); 
print_r($arr);
?>