<?php
$arr = array('1', 2);
$values = array('abc', 23, "23", 23.5, "23.5", '', ' ', null, true, false, $arr);
foreach ($values as $value) {
    echo "is_string(";
    var_export($value);
    echo ") = ";
    var_dump(is_string($value));
}
?>