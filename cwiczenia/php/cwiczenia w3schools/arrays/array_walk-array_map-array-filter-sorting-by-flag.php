<?php
//sorting with flags w3resources
header("Content-type:text\plain");
echo'<pre>';
$test_array = array(
    0 => 'example1',
    1 => 'Example11',
    2 => 'example10',
    3 => 'Example6',
    4 => 'example4',
    5 => 'EXAMPLE40',
    6 => 'example10'
);
asort($test_array, SORT_STRING | SORT_FLAG_CASE | SORT_NATURAL);
//its saves for e.g indexes in order
print_r($test_array);
$origarray1 = array(2.4, 2.6, 3.5);
$origarray2 = array(2.4, 2.6, 3.5);
//print_r(array_map('floor', $origarray1)); // $origarray1 stays the same
// changes $origarray2
array_walk($origarray2, function (&$v, $k) { $v = floor($v); }); 
print_r($origarray2);
// this is a more proper use of array_walk
array_walk($origarray1, function ($v, $k) { echo "$k => $v", "\n"; });
// array_map accepts several arrays
print_r(
    array_map(function ($a, $b) { return $a * $b; }, $origarray1, $origarray2)
);
// select only elements that are > 2.5
print_r(
    array_filter($origarray1, function ($a) { return $a > 2.5; })
);





echo"</pre>";
//roznice - array walk vs array map
//https://stackoverflow.com/questions/3432257/difference-between-array-map-array-walk-and-array-filter
echo '<br>';
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

function test_print($item2, $key)
{
    echo "$key. $item2<br />\n";
}

echo "Before ...:\n";
array_walk($fruits, 'test_print');
?>