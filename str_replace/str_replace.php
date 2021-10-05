<?php
$bodytag = str_replace("%body%", "black", "body text='%body%'");
echo $bodytag."<br>";//body text='black'

$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
echo $onlyconsonants."<br>";//Hll Wrld f PHP

$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

$newphrase = str_replace($healthy, $yummy, $phrase);
echo $newphrase."<br>";//You should eat pizza, beer, and ice cream every day.

$str = str_replace("ll", "", "good golly miss molly!", $count);
echo $count."<br>";//2

$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer");

$newphrase = str_replace($healthy, $yummy, $phrase);
echo $newphrase."<br>";//You should eat pizza, beer, and every day.

$phrase  = array("fruits");
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer");

$newphrase = str_replace($healthy, $yummy, $phrase);
print_r($newphrase);//Array ( [0] => pizza )
?>