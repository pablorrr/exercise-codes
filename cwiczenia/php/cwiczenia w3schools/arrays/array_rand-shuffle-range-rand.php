<?php
header("Content-type:plain\text");
/*15. Write a PHP script to generate unique random numbers within a range. Go to the editor
Sample Range : (11, 20) 
Sample Output : 17 16 13 20 14 19 18 15 11 12
*/
$random = range(11,20);
$i=0;
foreach($random as $val){
    echo rand($val[$i],count($random))." ";//par min max value to pick random value
    //rand doesnt  generate array , return only random integer
    $i++;
}

//solution with array_map

function _randomize($item){
 return rand($item,count(range(11,20)))." ";
}

$arr = array_map("_randomize", range(11,20));
print_r($arr);

/*solution from w3resources*/
$n=range(11,20);
shuffle($n);//shuffle generate random orderr from an array
for ($x=0; $x< 10; $x++)
{
    echo $n[$x].' ';
}
echo "\n";
//array_rand usage- return array of random oreder of keys from array
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 3);// second parameter is how many keys should be randomized from arr
print_r($rand_keys);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
?>