<?php
//jest to spsosb na usuwaonie wiecj niz jednego znaku z lancucha
//str replace jako pierwszy parametr przyjmuje jeden znak lub grupe znaków ale odzielonych przecinkiem i podanych w cudzyslowiu stad zastosowanie str_split

function reme_unwtd_char ($char_to_trsfrm,$unwtd_char){

    return str_replace(str_split($unwtd_char)," " ,$char_to_trsfrm );
}
    
echo reme_unwtd_char('67688kdjfdj%^&()','%^&()');
?>