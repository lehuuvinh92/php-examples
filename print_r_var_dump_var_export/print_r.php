<?php
$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
$value = print_r ($a);
//or
$value = print_r ($a, false);
echo "value = ".$value;
$str = print_r ($a, true);
echo $str;
?>