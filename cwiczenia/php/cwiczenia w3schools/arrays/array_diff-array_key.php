<?php
header("Content-type:plain\text");
/*get the largest key
*/
$ceu = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague", "Estonia" => "Tallin",
    "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna",
    "Poland" => "Warsaw");
$max_key = max(array_keys($ceu)); //max can also count the largest length of an array key
echo $max_key . "\n";
/*Write a PHP function that returns the lowest integer that is not 0.*/
function minNotZero($arr)
{
    return min(array_diff(array_map("intval", $arr), array(0)));//array_diff computes difference between two arr by checking what is same value and removes duplicates from //first arr and return new arr which was first
}

$array = array(0, 5, 7, 8, 9, 34);
print_r(minNotZero($array));
?>