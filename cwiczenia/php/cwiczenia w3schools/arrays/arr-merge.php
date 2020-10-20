<?php
header("Content-type:plain\text");
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com"); 
$arrMerged = array_merge($array1,$array2);
print_r($arrMerged);
$arrMerged = $array1+$array2;
//another way to merge arrays it doesnt merge strings eleemnts
print_r($arrMerged)
?>