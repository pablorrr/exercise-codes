<?php
//arrplice in the function

//coorect this funciotn with check the conditional if given parameter are correct for example length and position //to remove are not higher than count of arr itd, for example pos + length cant be higher than arr element count
header("Content-type:text/plain");
$origArr = array(1, 2, 3, 4, 5);
$stringArr = array("red", "green", "blue");
function  arrTransform($arr,$pos,$length,$input ){

array_splice($arr,$pos,$length,$input);
return $arr;    
}

print_r(arrTransform($stringArr,1,1,9));






?>