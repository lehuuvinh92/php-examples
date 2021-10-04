<?php 
$id1 = uniqid();
$id2 = uniqid();
//or
$id3 = uniqid('', false);
//or
$id4 = uniqid('', true);

$id5 = uniqid('gochocit_');
//or
$id6 = uniqid('gochocit_',false);
//or
$id7 = uniqid('gochocit_',true);

echo $id1."<br>";
echo $id2."<br>";
echo $id3."<br>";
echo $id4."<br>";
echo $id5."<br>";
echo $id6."<br>";
echo $id7."<br>";
 ?>