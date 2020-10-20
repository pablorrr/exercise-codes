<?php
//return only "the" from given string
header("Content-type:text/plain");
//difference btw stripos and strrpos : stripos- find first occurence of given sign), strrpos- find last occurence of the given sign(or string)
$_sstring = 'http://www.example.com/5478631';
$_sstring = substr($_sstring,strrpos($_sstring,"/")+1);
echo $_sstring."\n";
?>