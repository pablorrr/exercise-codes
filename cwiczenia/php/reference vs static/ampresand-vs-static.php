<?php
//amresand mixed with static 
// ogolnie uniezmozliwia nadpisanie zmiennej przez nowa wartosc(np przypadkowao przez programiste)
//source :https://gist.githubusercontent.com/msankhala/3a51b8dcc480e656a682/raw/71ea149d0ddfd23e9b5534acad9234f9b2e4e63f/ampersand-before-php-function-names.php
// You may have wondered how a PHP function defined as below behaves:
function &config_byref()
{
    static $var = "hello";

    return $var;
}
// the value we get is "hello"
$byref_initial = config_byref();

// let's change the value
$byref_initial = "world";

// Let's get the value again and see
echo "Byref, new value: " . config_byref() . "\n"; // We still get "hello"

// However, let’s make a small change:
// We’ve added an ampersand to the function call as well. In this case, the function returns "world", which is the new value.
// the value we get is "hello"
$byref_initial = &config_byref();

// let's change the value
$byref_initial = "world";

// Let's get the value again and see
echo "Byref, new value: " . config_byref() . "\n"; // We now get "world"

// If you define the function without the ampersand, like follows:

// function config_byref()
// {
//     static $var = "hello";

//     return $var;
// }

// Then both the test cases that we had previously would return "hello", regardless of whether you put ampersand in the function call or not.
//static  info in OOP https://www.php.net/manual/en/language.oop5.static.php
//inny przyklad http://www.wellho.net/mouth/2630_Static-variables-and-ampersands-in-PHP.html