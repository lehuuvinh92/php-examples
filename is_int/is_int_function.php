<?php
$arr = array('1', 2);
$values = array(23, "23", 23.5, "23.5", null, true, false, $arr);
foreach ($values as $value) {
    echo "is_int(";
    var_export($value);
    echo ") = ";
    var_dump(is_int($value));
}
?>