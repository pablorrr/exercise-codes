<?php

header('Content-type: text/plain');//poprwane wyswietlanie konca lini
/* find the difference between two words and return position of this difference*/
$football='football';
$footboll='footboll';
$football_arr = str_split ($football);
$footboll_arr = str_split ($footboll);

for($i=0; $i<count($football_arr); $i++){
    if(strcmp ( $football_arr[$i], $footboll_arr[$i])!==0){
        $str_pos = stripos(implode("" ,$football_arr),  $football_arr[$i]);
      echo  sprintf ( '" %1$s"  is NOT equal to %2$s and position of character is "%3$d" '  ,$football_arr[$i], $footboll_arr[$i], $str_pos )."\n";
    }
} 
   for($i=0; $i<count($football_arr); $i++){
    if(strcmp ( $football_arr[$i], $footboll_arr[$i])==0){
        $str_pos = stripos(implode("" ,$football_arr),  $football_arr[$i]);
      echo  sprintf ( '" %1$s"  is  equal to %2$s and position of character is "%3$d" '  ,$football_arr[$i], $footboll_arr[$i], $str_pos )."\n";
    }
 }
       
  //to do same but with foreach statement, notice printf doesnt require echo function to display     

$i= 0;      
foreach($football_arr as $foot_arr){
    if(strcmp ($foot_arr, $footboll_arr[$i])!==0){
        $str_pos = stripos(implode("" ,$football_arr), $foot_arr);
       printf ( ' %1$s  is NOT equal to %2$s and position of character is %3$d '  ,$foot_arr, $footboll_arr[$i], $str_pos )."\n";
    }
    $i++;
}    
       

?>