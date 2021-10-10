<?php
$a = array(1, 2, array("a", "b", "c"));
$str = var_export($a);
//or
$str = var_export($a, false);
var_dump($str);
$a = array(1, 2, array("a", "b", "c"));
$str = var_export($a, true);
var_dump($str);
?>