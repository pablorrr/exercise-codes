<?php
/*Write a PHP script which decodes the following JSON string.
Sample JSON code :
{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}*/
header("Content-type:text/plain");
$stringJSON='{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}';
print_r(json_decode($stringJSON));//without additional parmeters  return stdclas object reasambe array
$stringJSON='{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}';
print_r(json_decode($stringJSON,true));//return php array
print_r(json_encode($stringJSON));//encode as back to the JSON FORMAT FROM PHP ARRAY
echo "SOLUTION FROM W3RESOURCES COM";
function w3rfunction($value,$key)
{
    echo "$key : $value"."\n";
}
$a = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail":
{ 
"Publisher": "Little Brown"
}
}';
$j1 = json_decode($a,true);
array_walk_recursive($j1,"w3rfunction");//arrwalk recursive accept second arg as callback wchich can transform every single eleemnt from array , it was used for nicer //represent of result
//another example with  array_walk_recursive()
$arr = array(1,2,3,4,5,6,7,8,9);
function adding ($value, $key){
    $value = $value + 1;
    echo $value;
}
array_walk_recursive($arr,"adding");
?>