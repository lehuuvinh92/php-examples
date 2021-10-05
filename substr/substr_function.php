<?php
//offset is negative
$rest = substr("abcdef", -1);//"f"
$rest = substr("abcdef", -2);//"ef"
$rest = substr("abcdef", -3, 1);//"d"
//length is negative
$rest = substr("abcdef", 0, -1);  //"abcde"
$rest = substr("abcdef", 2, -1);  //"cde"
$rest = substr("abcdef", 4, -4);  //""
$rest = substr("abcdef", -3, -1); //"de"
//examples
echo substr('abcdef', 1); //bcdef
echo substr('abcdef', 1, 3); //bcd
echo substr('abcdef', 0, 4);//abcd
echo substr('abcdef', 0, 8);//abcdef
echo substr('abcdef', -1, 1);//f
?>