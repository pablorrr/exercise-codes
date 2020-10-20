<?php
header("Content-type:plain\text");
//search and count same gicen eleements in array
function countSearch ($arr, $givenEl){
    if(in_array($givenEl, $arr)){
        $countEl = 0;
        foreach ( $arr as $singleEl){
            if($singleEl == $givenEl)
                $countEl++;
        }
        return $countEl;
    }
    else echo "theres not such value as given  ".$givenEl;
}
$arr = array("one", "two", "three", "four", "five" , "six", "six");
echo countSearch ($arr, "on");
//arrsearch version
function countSearchh ($arr, $givenEl){
    if(array_search($givenEl, $arr)){
        $countEl = 0;
        foreach ( $arr as $singleEl){
            if($singleEl == $givenEl)
                $countEl++;
        }
        return $countEl;
    }
    else echo "theres not such value as given  ".$givenEl;
}
$arr = array("one", "two", "three", "four", "five" , "six", "six");
echo countSearchh ($arr, "six");
//solution from  w3resource.com
function count_array_values($my_array, $match) 
{ 
    $count = 0; 
    foreach ($my_array as $key => $value) 
    { 
        if ($value == $match) 
        { 
            $count++; 
        } 
    } 
    return $count; 
} 
$colors = array("c1"=>"Red", "c2"=>"Green", "c3"=>"Yellow", "c4"=>"Red");
echo "\n"."Red color appears ".count_array_values($colors, "Red"). " time(s)."."\n"; 
?>