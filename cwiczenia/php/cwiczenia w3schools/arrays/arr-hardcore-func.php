<?php
//arr_diif_key porownuje klucze (nie tak jak arr diff)
// wobydwu tablicach i zwraca te klucze z waartosciami jako
// tavlica ktore sie nie powtarzja w pierwzszej tablicy
header("Content-type:tetxt\plain");
$tablica1 = array("niebieski" => 1, "czerwony"  => 2, "zielony"  => 3, "purpurowy" => 4);
$tablica2 = array('zielony' => 5, 'niebieski' => 6, 'żółty' => 7, 'cyan'   => 8);

var_dump(array_diff_key($tablica1, $tablica2));


//aardiff ukey to samo dzialnie ale z funckja callback jako filtrujaca wynik
function porownaj_klucze($klucz1, $klucz2)
{
    if ($klucz1 == $klucz2)
        return 0;
    else if ($klucz1 > $klucz2)
        return 1;
    else
        return -1;
}

$tablica1 = array('niebieski'  => 1, 'czerwony'  => 2, 'zielony'  => 3, 'purpurowy' => 4);
$tablica2 = array('zielony' => 5, 'niebieski' => 6, 'żółty' => 7, 'cyan'   => 8);
//return same result like above example
var_dump(array_diff_ukey($tablica1, $tablica2, 'porownaj_klucze'));

$tablica1 = array("a" => "zielony", "b" => "brązowy", "c" => "niebieski", "czerwony");
$tablica2 = array("a" => "zielony", "żółty", "czerwony");
$wynik = array_diff_assoc($tablica1, $tablica2);
//assoc uwzglednia klucze w porownaniu uzywaj arraydiff diff assoc powonaj wyniki z arraydiff
print_r($wynik);

$tablica1 = array("a" => "zielony", "b" => "brązowy", "c" => "niebieski", "czerwony");
$tablica2 = array("a" => "zielony", "żółty", "czerwony");
$wynik = array_diff($tablica1, $tablica2);
print_r($wynik);

//arr fil keys wypelnianie tablicy danymi gkluczmi

$keys = array("one", "two", "three");
$arr = array (1,2,3);
$array = array_fill_keys($keys,$arr);
print_r($array);
$arrKeys = array_keys($array);

print_r($arrKeys);
$array = array_values($array);

$array = array_combine($arrKeys,$array[0]);
print_r($array);
//arr fill tworzy tablice od podanego indexu  z podana iloscia i powarzajacym sie eleemntem mozliwosc tworzenie tablic multi

$array = array_fill(0,10,"one");
print_r($array);

$array = array_fill(0,10,array("one"));
print_r($array);

$i = 0;
$array = array_fill(0, 10,"elNr".$i=$i+1);

print_r($array);

$arrMerged =array_merge(array("one","two","three"), array("four","five","six"));
print_r($arrMerged);


$tbl1 = array ("kolor" => array ("ulubiony" => "czerwony"), 5);
$tbl2 = array (10, "kolor" => array ("ulubiony" => "zielony", "niebieski"));
$wynik = array_merge_recursive($tbl1, $tbl2);
//https://php.net/manual/en/function.array-merge-recursive.php
print_r($wynik);
//arr merge recursive laczy tablice w inny sposob aby
// to zauwazyc w tablicy musza byc rozne typy i tablica wielowymiarowa
// klucze ktore tak sanmo sie nazywaja scalaja sie w jeden
//zadne wartosci sie nie napisuja w przeciwniwnstwie fo array maerge:
// arr merge jesli  wartosci maja te sam klucz  to wartosc z ostatniej np drugiej
// tablicy  zastapi z pierwszej
// wartosci ktore nie posiadaja kluczy dostaja klucze numeryczne (indexy)
// zgodnie z kolejnioscia
// arr rekutsive zachowuje wsztskie wartosci tablicy

$tbl1 = array ("kolor" => array ("ulubiony" => "czerwony"), 5);
$tbl2 = array (10, "kolor" => array ("ulubiony" => "zielony", "niebieski"));
$wynik = array_merge($tbl1, $tbl2);
//array merhge to saamo co arrmerge rekurcsive
// ale napisywane sa wartosci o tych samych lluczach
print_r($wynik);

//arr multisort sortowanier tablic jednocvzesnie mozliwosc dodawania flag sortowania$_COOKIE$tbl1 = array (10, 100, 100, 0);
$tbl2 = array (1, 3, 2, 4);
array_multisort ($tbl1, $tbl2);

var_dump($tbl1);
var_dump($tbl2);

//array uintersect assoc - przeciwnienstwo  array diff (porownuje wartosci iwyrzuca z pierwszej tablicy duplikaty) orownuje ttablice i zatrzymuje wartosci z //powtaerzajce sie w pierwszej tablic y, assoc dodatkowo bierze pod uwage klucze- klucze i wartosci musza byc takie same f jest case insensitive, przyjmuje rowniez //callaback
$tablica1 = array("a" => "zielony", "b" => "brązowy", "c" => "niebieski", "czerwony");
$tablica2 = array("a" => "ZIELONY", "B" => "brązowy", "żółty", "czerwony");

print_r(array_uintersect_assoc($tablica1, $tablica2, "strcasecmp"));
// przeciwienstwo arr diff , arr intersect key zostawia powtzrazajace sie klucze eleemnty przepisuje z pierwszej tab
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_intersect_key($array1, $array2));

$sweet = array('a' => 'apple', 'b' => 'banana');
$fruits = array('sweet' => $sweet, 'sour' => 'lemon');

function test_print($item, $key)
{
    echo "$key holds $item\n";
}

array_walk_recursive($fruits, 'test_print');

//podsumowanie:

//tlumaczei postfixow:

// diff- pozostaja tylko orygianlne wartosci lub klucze
//intersect - odwrtonie jak w/w pozostaja tylko  powtarzjace
// sie wartosci lub klucze- duplikaty
// u- dolaczany customowy callback
//key - uwzglenienie tylko kluczzy
//asssoc - uwzgledniaanie zarowno kluczy  jakmiw artosci przy porownaiu




//roznice arr walk i rekursive
//https://www.geeksforgeeks.org/php-array_walk_recursive-function/
// array walk nadaje sie do tsalic jednowymairowych
// - przetwarza elementy  tab prze callback i zwraca true z nowa tablica
// array walk rekursicvve do tablic wielowymiarowych
//- przetwarza elementy  tab prze callback i zwraca true z nowa tablica
/*
 * arrdiff - porownuje  1 z 2 tablica jesli elementy w 1 sa takie same j
 * ak w drugiej to sa usuwane - nie brane sa pod uwage
 * klucze i indexy pzy porownanaiu
 *
 * aar u diff to samo co powyzej ale z dolaczym callback
 *
 * array diff key- porownywane sa tylko klucze nie wartosci
 * jesli elementy w 1 sa takie same
 * jak w drugiej to sa usuwane
 *
 * arr dif u key - takie samo dzilanie jak w/w  z dolaczeniem callback
 *
 * arr interassoc - dzzialanie odwrotne jak arr diff-
 * pozostaja te same eleementy (brane pod uwage tylko wartosci bez indexow)
 *
 * arr intersect key - prownywane sa tylko klucze (indexy) bez wartosci
 * pozostaje te same leementy w tab 1
 *
 * arr iintersertct ukey - to samo co w/w z dlaczonym callback
 *
 * arr intersect assoc - bierze pdd uwage zarowne  klucze  jak i wartosci
 * pozostawia tylkoi wylacznie te wartosci w tab 1 kotre sa aidealnie identyczne
 * jako pary klucz i wartosc
 * nalezy ja stosowac do tablic wielowymiarowych gdzie
 * zalezy na bardzo dokladnym  dopasowaniu
 * par klucz wartosc i pozostawinu tych samych wartosci- duplikatow
 * https://www.php.net/manual/en/function.array-intersect-assoc
 *
 *arr intersect uassoc - to samo co w/w tyle z e dolaczony callback
 *
 *array_diff_assoc- odwrtoenie do w/w pozostaja tylko wartosci oryginalne
 * brane sa pod uwage  klucze i wartosci
 *
 * array_diff_uassoc - to samo co powyzej - dolacznia dodatkowo fukcja cllaback
 *
 *
 */


?>