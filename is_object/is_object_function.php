<?php
$obj = new stdClass();
$obj->students = array('Kalle', 'Ross', 'Felipe');

var_dump(is_object($obj));//bool(true)

class TestObject{
    public $name = "Name of Object";
    function go(){
        echo "Let's go!";
    }
}
$test = new TestObject;
var_dump(is_object($test));//bool(true)

$arr = array('1', 5, 'abc');
$a = 5;
$str = "Hello PHP!";
var_dump(is_object($arr));//bool(false)
var_dump(is_object($a));//bool(false)
var_dump(is_object($str));//bool(false)
?>