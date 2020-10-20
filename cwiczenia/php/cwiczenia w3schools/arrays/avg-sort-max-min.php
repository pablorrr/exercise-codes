<?php
header("Content-type:plain\text");
$arr = array(78, 60, 71, 73, 85, 66, 76, 63, 75, 68, 72, 65, 74, 62, 64, 75, 79);
$sumArr = array_sum($arr);
$countArr = count($arr);
$average = $sumArr / $countArr;
echo $average."\n";
sort($arr);
print_r($arr);
$arr= array_slice($arr, -5);
print_r($arr);
$arr = array(78, 60, 71, 73, 85, 66, 76, 63, 75, 68, 72, 65, 74, 62, 64, 75, 79);
rsort($arr);
$arr= array_slice($arr, -5);
sort($arr);
print_r($arr);
?>