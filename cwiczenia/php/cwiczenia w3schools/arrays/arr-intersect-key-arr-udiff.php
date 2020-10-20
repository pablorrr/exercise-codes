<?php
header("Content-type:plain\text");
//array_udif  computes difference btw array with calllback taken from https://www.w3schools.com/php/func_array_udiff.asp
function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue","yellow");
$a2=array("A"=>"red","b"=>"GREEN","yellow","black");
$a3=array("a"=>"green","b"=>"red","yellow","black");

$result=array_udiff($a1,$a2,$a3,"myfunction");
print_r($result);

//arrintersect key usage

/*Returns an associative array containing all the entries of array1 which have keys that are present in all arguments.
sprawdza czy istnieja te same klucze w obydwu atablicach jeslit ak to te same klucczue z wartosciami pierwszzej tablicy sa zwracane w postaci tab asocjacyjnej
*/
$first_array = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black'); 
$second_array = array('c2', 'c4'); 
print_r(array_intersect_key($first_array, array_flip($second_array)));

//przyklad z php manual
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_intersect_key($array1, $array2));


?>