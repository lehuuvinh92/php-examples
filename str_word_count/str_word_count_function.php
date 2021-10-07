<?php
$str = "Con ông cháu cha";
print_r(str_word_count($str, 1));
print_r(str_word_count($str, 1, 'ôá'));
print_r(str_word_count($str, 2));
echo str_word_count($str, 0);//5
echo str_word_count($str);//5
?>