<?php
header("Content-type:plain\text");
//SORT IS CASE SENSITITVE, EXAMPLE;(wrong result of sorting)
$fruits = array("lemon", "Orange", "banana", "apple");
//prints orange as forst which s wrong
sort($fruits);
print_r($fruits);
//natcasesort example, sorting in natural only when first letter is capitalize
// and PRESERVE KEYS in natural order
function sortingNatural($array){
    $arrKeys =array_keys($array);//zwraca  tan;ice kluczy  zpodanej tablicy
    foreach($array as $arrEl){
        $upperEl = ucwords($arrEl);//zamiana nna wieksza luitetre
        if( $upperEl === $arrEl){
            natcasesort($array);
            $array = array_combine($arrKeys, $array);
            //array combine - tworzy z tablice z dwoch tablic jedna kluczy drga wartosci
            //https://www.php.net/manual/en/function.array-combine.php
            print_r($array);
            break;
        }
    } 
}
$fruits = array("lemon", "orange", "Banana", "apple");
sortingNatural($fruits);
?>