<?php
header("Content-type:text/plain");

function _substring_replace($transformed_string){

$add_string = "and human beings";
$transformed_string = substr_replace($transformed_string, sprintf("%s",$add_string.' '), 31, 0 );
return $transformed_string;

}

echo _substring_replace("We are the most popular people in entire world");
?>