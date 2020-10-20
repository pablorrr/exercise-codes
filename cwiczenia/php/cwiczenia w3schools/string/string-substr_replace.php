<?php
//return only "the" from given string
header("Content-type:text/plain");
//reset usage
$string = "The quick brown fox";
$string = explode(" ", $string);
$string = reset($string);
echo $string."\n";
//str_replace usage
$_string = "The quick brown fox";
$_string = str_replace("quick brown fox"," ",$_string);
$_string = trim ($_string);
echo $_string."\n";
//substr_replace usage
$_sstring = "The quick brown fox";
$_sstring = substr_replace($_sstring, "  ", 3, 16);
echo $_sstring."\n";
?>