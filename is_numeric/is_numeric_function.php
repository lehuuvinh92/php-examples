<?php
$arr = array('1', 2);
$values = array(
    "42",
    " 7.8",
    " 1ab",
    1337,
    0x539,
    02471,
    0b10100111001,
    1337e0,
    "0x539",
    "02471",
    "0b10100111001",
    "1337e0",
    "not numeric",
    $arr,
    9.1,
    null,
    '',
    true,
    false
);
foreach ($values as $value) {
    echo "is_numeric(";
    var_export($value);
    echo ") = ";
    var_dump(is_numeric($value));
}
?>