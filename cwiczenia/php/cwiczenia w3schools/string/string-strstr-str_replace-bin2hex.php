<?php
function stringer($string){
    return  printf ("%s",str_replace("@","",strstr($string,"@") )); 
}
stringer("rayy@example.com");     



function _hexadecimal($string){

    return bin2hex($string);

}

echo _hexadecimal("Paweł Kowalczykowski");
?>

