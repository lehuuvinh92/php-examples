<?php
$str = "gochocit.com";
echo md5($str)."<br>";//82f994e3d08ae2fe4c7785e31b364454
echo md5($str, false)."<br>";//82f994e3d08ae2fe4c7785e31b364454
echo md5($str, true)."<br>";//����Њ��Lw��6DT
if(md5($str)==='82f994e3d08ae2fe4c7785e31b364454'){
	echo "Welcome to gochocit.com";
}
?>