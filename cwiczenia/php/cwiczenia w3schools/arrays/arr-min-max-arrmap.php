<?php
header("Content-type:plain\text");
/*Write a PHP script to get the shortest/longest string length from an array.
Sample arrays : ("abcd","abc","de","hjjj","g","wer"), min max slabo pracuje na string
*/
$arr = array("abcd","abc","de","hjjj","g","wer");
$arr = array_map("strlen",$arr);
echo min($arr);
echo max($arr);
//example within function usage  the same
$array = array("abcd","abc","de","hjjj","g","wer");
function maxMinString($arr){
    $arr = array_map("strlen",$arr);
    echo min($arr);
    echo max($arr);
}
maxMinString($array);
//another array_map usage, do not use atrray map to simply echoing value of array use foe e.g foreach
$arr = array(1,2,3,4,5,6);
function printme($item){
    return $item * $item;
}
$arr = array_map("printme",$arr);
print_r($arr);
?>