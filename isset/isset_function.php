<?php
$value1 = 0x00;
//or
$value2 = '\0';
$value3 = null;
var_dump(isset($value1));//bool(true)
var_dump(isset($value2));//bool(true)
var_dump(isset($value3));//bool(false)

$var = '';
var_dump(isset($var));//bool(true)

$a = "test";
$b = "anothertest";

var_dump(isset($a));//bool(true)
var_dump(isset($a, $b));//bool(true)

unset ($a);

var_dump(isset($a));//bool(false)
var_dump(isset($a, $b));//bool(false)

$foo = NULL;
var_dump(isset($foo));//bool(false)

$arr = array ('test' => 1, 'hello' => NULL, 'pie' => array('a' => 'apple'));
var_dump(isset($arr['test']));//bool(true)
var_dump(isset($arr['foo']));//bool(false)
var_dump(isset($arr['hello']));//bool(false)

var_dump(isset($arr['pie']['a']));//bool(true)
var_dump(isset($arr['cake']['a']['b']));//bool(false)
?>