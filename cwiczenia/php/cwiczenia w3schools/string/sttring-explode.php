<?php
function stringer($string){
    $string = explode("/", $string );
    $string = end( $string );
    return  printf ("%s",substr($string,0,-4)); 
}
 stringer("https://www.w3resource.com/index.php");     
?>