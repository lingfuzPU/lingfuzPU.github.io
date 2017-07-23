<?php

list($a,$b,$c)=explode(',',file_get_contents('visitCount.txt'));
$a=(int)$a; $b=(int)$b; $c=(int)$c;
$a++; 
//check if the month of $b is equal to the month now
$ntime=time();
list($min,$hour,$day,$month,$year)=explode(',',date('i,H,j,n,Y',$ntime));
list($min,$hour,$day,$month2,$year)=explode(',',date('i,H,j,n,Y',$b));
if ($month!=$month2) $c=0;
$c++;
$b=$ntime;
file_put_contents('visitCount.txt',"$a,$b,$c");
echo "$a,$c";
?>

