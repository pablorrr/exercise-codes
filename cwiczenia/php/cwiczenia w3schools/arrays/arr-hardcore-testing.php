<?php
header("Content-type:text\plain");
function computeSameVal ($arr1,$arr2){
  return array_intersect($arr1, $arr2);//zostawia czesci wspolne z porownanaych tablic
}
$array1 = array(1,2 ,3,4 );
$array2 = array(1,2 ,3 );

print_r(computeSameVal($array1, $array2));

$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "a"=>"yellow", "red");
$result = array_intersect_assoc($array1, $array2);//dodoatkowo bierze pod uwage takie same klucze(zarowno numeryczne jak i haszujace) i wartosci przy tych kluczach
print_r($result);

$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "a"=>"yellow", "red");
$result = array_intersect_key($array1, $array2);//bierzx3 pod uwage tylko te same klucze , wartosci moga byc rozne przepisywane z pierwszej tablicy
print_r($result);

//methods array_intersect_key and array_intersect_assoc moga przyj,owac  przedrostek u w ostatniej czesci nazwy co oznacza ze dodawane sa  parametry w postaci nazwy //funcji callback 

//put elements in diiffrent places into existing array
$array = array("a" => "green", "red", "blue");

array_unshift($array ,"orange");//add to begiin el of arr
print_r($array);

array_shift($array);//accept only one par as arr and remove from this arr first ele
print_r($array);
array_shift($array);
print_r($array);

array_push($array, "black");//add given eleemnt tot end of an array
print_r($array);

array_pop($array);//remove last element accept only one par  arr
print_r($array);
?>