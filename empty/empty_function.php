<?php
$exist = 5;
var_dump(empty($no_exist));//bool(true)
var_dump(empty($exist));//bool(false)
$arr = array('1', 2);
$values = array(
	'',
	0,
	' ',
	'0',
	false,
	'false',
	9.1,
	"hello all!",
	$arr
);
foreach ($values as $value) {
    echo "empty(";
    var_export($value);
    echo ") = ";
    var_dump(empty($value));
}
var_dump(empty(00));//bool(true)
var_dump(empty('00'));//bool(false)
var_dump(empty(0x00));//bool(true)
var_dump(empty('0x00'));//false
?>