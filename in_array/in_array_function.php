<?php 
$os = array("Mac", "NT", "Irix", "Linux", "");
$result1 = in_array("Irix", $os);//true (1)
$result2 = in_array("mac", $os);//true (0)
$result3 = in_array(null, $os);

echo var_dump($result1);//bool(true)
echo var_dump($result2);//bool(false)
echo var_dump($result3);//bool(true)

$a = array('1.10', 12.4, 1.13);

$result4 = in_array('12.4', $a, true);//false (0)
$result5 = in_array(1.13, $a, true);//true (1)

echo var_dump($result4);//bool(false)
echo var_dump($result5);//bool(true)

$a = array(array('p', 'h'), array('p', 'r'), 'o');

if (in_array(array('p', 'h'), $a)) {
    echo "'ph' was found\n";
}

if (in_array(array('f', 'i'), $a)) {
    echo "'fi' was found\n";
}

if (in_array('o', $a)) {
    echo "'o' was found\n";
}

?>