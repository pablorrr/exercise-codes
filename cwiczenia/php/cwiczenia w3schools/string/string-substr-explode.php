<?php
header("Content-type:text\plain");

$string ='The quick brown fox jumps over the lazy dog';
$string= substr($string,0,26);
echo $string."\n";
/////////////////////////////////////////
$string ='The quick brown fox jumps over the lazy dog';
$string= substr($string,0,-18);
echo $string."\n";
///////////////////////////////
$string ='The quick brown fox jumps over the lazy dog';
$string = explode(" ",$string);
print_r($string);
///////////////////////////////////
$i = 0;
foreach( $string as $word ){
    if ($string[$i]!== $string[5]){
        $result = $word." "; 
        $i++;
        echo $result;  
    }
}
echo "</br>";
//////////////////////////////////////////////
for ($i=0, $l=count($string); $i<$l-4; $i++){
    echo $string[$i]." "; 
    }

echo "</br>";

$i=0; 
$l=count($string);
while($i<$l-4){ echo $string[$i]." "; $i++;}

echo "</br>";
///////////////////////////////
$i=0; 
$l=count($string);

do{echo $string[$i]." "; $i++;}
while($i<$l-4);

///////////////////////
function return_five($string){

return substr($string,0,26);

}

echo return_five('The quick brown fox jumps over the lazy dog');

?>