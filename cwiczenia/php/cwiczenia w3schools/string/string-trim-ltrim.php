<?php
header("Content-type:text/plain");

$string = "//////// we are the best//////";
echo trim ($string,"/")."\n";
echo rtrim ($string,"/")."\n";
echo ltrim ($string,"/")."\n";
echo trim ($string,"a")."\n";

$text = "\t\tThese are a few words :) ...  ";
$trimmed = ltrim($text, " \t");
echo $trimmed;


?>