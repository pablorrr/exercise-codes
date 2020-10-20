<?php
header("Content-type:plain\text");
/*Write a PHP script to sort an array in reverse order*/
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
             "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
             "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
             "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
             "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=> "Valetta","Austria" => "Vienna", "Poland"=>"Warsaw") ;

$reversed = array_reverse($ceu);//REVERSING EL OF ARR
print_r($reversed);

//interchange key with value(replacement)
$flippedArr = array_flip($ceu);
print_r($flippedArr);

//retrive key name with the hifghest value w3resources solution
$x = array(
    'value1' => 3021,
    'value2' => 2365,
    'value3' => 5215,
    'value4' => 5214,
    'value5' => 2145);
reset($x);   // optional.
arsort($x);
$key_of_max = key($x);//take the name pf the key but given parameter mu st be an array and must be somehow iterated
echo "Index of the highest value : ".$key_of_max."\n";

echo " my solution ";
$x = array(
    'value1' => 3021,
    'value2' => 2365,
    'value3' => 5215,
    'value4' => 5214,
    'value5' => 2145);

echo array_search( max($x),$x )." "."\n";//arr search finding val in the arr return key of this val otherwose false




//example of key  func from php manual
$array = array(
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple');

// this cycle echoes all associative array
// key where value equals "apple"
while ($fruit_name = current($array)) {
    if ($fruit_name == 'apple') {
        echo key($array).'<br />';
    }
    next($array);
}
//notice: current() and next() are bult in PHP


//navigation in php arrays$_COOKIE$transport = array('foot', 'bike', 'car', 'plane');
$transport = array('foot', 'bike', 'car', 'plane');
$mode = current($transport); // $mode = 'foot';//by default return first eleement if ther'nt any operations before
$mode = next($transport);    // $mode = 'bike';
$mode = current($transport); // $mode = 'bike';
$mode = prev($transport);    // $mode = 'foot';
$mode = end($transport);     // $mode = 'plane';
$mode = current($transport); // $mode = 'plane';

$arr = array();
var_dump(current($arr)); // bool(false)

$arr = array(array());
var_dump(current($arr)); // array(0) { }


?>