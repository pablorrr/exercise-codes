<?php
header("Content-type:text\plain");
//html convertion- tag to entities(pl- encje) and revert conversion
$html_string ="<h1>Title</h1><p>content text</p>";
//$html_string= htmlentities ($html_string);
echo htmlentities ($html_string)."\n";
echo html_entity_decode( htmlentities ($html_string))."\n";
echo htmlspecialchars ($html_string)."\n";
echo htmlspecialchars_decode($html_string, ENT_HTML5)."\n";
//capitalize and samll caps functions
$html_string ="The best of the bests";
echo lcfirst($html_string)."\n";
$html_string ="the best of the bests";
echo ucfirst($html_string)."\n";
$html_string ="THE BEST THE BEST";
echo strtolower($html_string)."\n";
$html_string ="the best of the bests";
echo strtoupper($html_string)."\n";
$html_string ="the best of the bests";
echo ucwords($html_string)."\n";
//similarity comparison
$var1 = 'Hello';
$var2 = 'Hello';
$var3 = 'hello';
$var4 = "Pawel";
$var5 = "pewel";
echo similar_text($var1, $var2);  // 5 takich samych liter
echo similar_text($var1, $var3);  // 4 takie same litery
echo similar_text($var4,$var5)."\n";//3 takie same litery
//sscsnf podobnie jak sprintf i printf konweryuje naki na int  stringi itd z tym ze wyciaga te znaki z input formularza
$auth = "24\tLewis Carroll";
sscanf($auth, "%d\t%s %s", $id, $first, $last);
echo "<author id='$id'>
<firstname>$first</firstname>
<surname>$last</surname>
</author>\n";
//str_ireplace case insensitive replace string
$str = "This is the replacemnet string";
echo str_replace ("this", "this", $str)."\n";//doesnt work "this" not found
echo str_ireplace ("this", "this", $str)."\n";//although "this" is capitalized uppercase, transfroming will work
//add some signs to the string
$str="the content";
echo str_pad($str,25, "@")."\n";
echo str_pad($str,25, "@",STR_PAD_LEFT)."\n";
echo str_pad($str,25, "@",STR_PAD_BOTH)."\n";
//str repreat
$str ="repeat string";
echo str_repeat($str, 5)."\n";
//change string into variables
$str = "first=value&arr[]=foo+bar&arr[]=baz";
parse_str($str);
echo $first;  // value
echo $arr[0]; // foo bar
echo $arr[1]; // baz
//drugi parametr bedzie okrsla jak zmienna sie nazywai zmienne nie beda domyslnie reprezentowane w tablicy jak powyzej
parse_str($str, $output);
echo $output['first'];  // value
echo $output['arr'][0]; // foo bar
echo $output['arr'][1]."\n"; // baz
//str_word_count count word in the string or return array of counted  words
$string = "the most special string";
// 0 as third parameter , specify that  number of words must  be returned
echo str_word_count($string, 0)."\n";
//string case insensitive comparison , case sensitive comparison is strcmp()
$string = "hello";
$string_two ="Hello";
if(strcasecmp($string, $string_two)==0)
{echo "strings are same";
 echo strcasecmp($string, $string_two);}
elseif (strcasecmp($string, $string_two)!==0)
{echo "strings are NOT same";
 echo strcasecmp($string, $string_two);}
//zwracacanie ilosci znkow liczac od poczatku stringu ktroy nie powtarza swoch znakow w drugim porownywanym znaku
$a = strcspn('pawer',  'werkll');
$b = strcspn('abcd',  'banana');
$c = strcspn('hello', 'l');
$d = strcspn('hello', 'world');
var_dump($a);//2
var_dump($b);//0
var_dump($c);//2
var_dump($d);//2
//scviagnioj znczniki html i php ze stringu, drugi par dopuszczane tagi 
$str = "<p>paragreaph content</p><small>small text content</small>";
echo strip_tags($str, "<p></p>");
//zwraca caly text z prawej strony od pierwszego dopasowania znamu w drugim parametrze
$text = 'This is a Simple text.';
// this echoes "is is a Simple text." because 'i' is matched first
echo strpbrk($text, 'mi');
// this echoes "Simple text." because chars are case sensitive
echo strpbrk($text, 'S');
//porownanie podciagow substr_compare , 3 param pozycja poczatkowa od ktorej mozna sprawdzac, 4 param max liczba znkow do sprawdzenia
echo substr_compare("abcde", "de", -2, 2); // 0
echo substr_compare("abcde", "bcg", 1, 2); // 0
echo substr_compare("abcde", "BC", 1, 2, true); // 0, true means that comparison is case insensitive
echo substr_compare("abcde", "bc", 1, 3); // 1
echo substr_compare("abcde", "cd", 1, 2); // -1
echo substr_compare("abcde", "abc", 5, 1); // warning
//zliczanie podciagów wystepujacych w lancuchu    
$text = 'This is a test';
echo strlen($text); // 14
echo substr_count($text, 'is'); // 2
// the string is reduced to 's is a test', so it prints 1
echo substr_count($text, 'is', 3);
// the text is reduced to 's i', so it prints 0
echo substr_count($text, 'is', 3, 3);
// generates a warning because 5+10 > 14
echo substr_count($text, 'is', 5, 10);
// prints only 1, because it doesn't count overlapped substrings
$text2 = 'gcdgcdgcd';
echo substr_count($text2, 'gcdgcd');
//lamanie tesktu raz na podana szerokosc w liczbie tutja np co 20 znakow
$tekst = "Szybki, brązowy lis przeskoczył nad leniwym psem.";
$nowytekst = wordwrap($tekst, 20, "<br />\n");
echo $nowytekst;
?>