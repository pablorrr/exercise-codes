<?php
header("Content-type:plain\text");
/* Write a PHP function to change the following array's all values to upper or lower case. Go to the editor
Sample arrays : 
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
Expected Output : 
Values are in lower case.
Array ( [A] => blue [B] => green [c] => red ) 
Values are in upper case.
Array ( [A] => BLUE [B] => GREEN [c] => RED )
*/
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
$newArr = array();
foreach($Color as $upperCase){
    array_unshift($newArr,strtoupper($upperCase));
}
sort($newArr );
$arrKey = array_keys($Color);
print_r($arrKey );
$arrCombine = array_combine($arrKey,$newArr);
print_r($arrCombine);
?>