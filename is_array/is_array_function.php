<?php
$arr = array('this', 'is', 'an array');
var_dump(is_array($arr));//bool(true)

$arr2 = array(array('p', 'h'), array('p', 'r'), 'o');
var_dump(is_array($arr2));//bool(true)

$str = 'this is a string';
var_dump(is_array($str));//bool(false)

$value = 5;
var_dump(is_array($value));//bool(false)
?>