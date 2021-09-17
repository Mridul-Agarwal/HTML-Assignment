<?php
$str1 = 'fackbook';
$str2 = 'faceboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
?>