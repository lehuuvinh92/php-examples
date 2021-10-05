<?php
$today1 = date("F j, Y, g:i a");//October 5, 2021, 6:29 am
$today2 = date("m.d.y");//10.05.21
$today3 = date("j, n, Y");//5, 10, 2021
$today4 = date("Ymd");//20211005
$today5 = date('h-i-s, j-m-y, it is w Day');//06-29-51, 5-10-21, 2931 2951 2 Tueam21
$today6 = date('\i\t \i\s \t\h\e jS \d\a\y.');//it is the 5th day.
$today7 = date("D M j G:i:s T Y");//Tue Oct 5 6:29:51 CEST 2021
$today8 = date('H:m:s \m \i\s\ \m\o\n\t\h');//06:10:51 m is month
$today9 = date("H:i:s");//06:29:51
$today10 = date("Y-m-d H:i:s");//2021-10-05 06:29:51

//date() có timestamp
$datetime = date('d-m-Y H:i:s', 1634614259);//19-10-2021 05:30:59

$datetime = date('d-m-Y H:i:s');//05-10-2021 06:37:16
//or
date_default_timezone_set('Asia/Ho_Chi_Minh');
$datetime = date('d-m-Y H:i:s');//05-10-2021 11:37:16
?>