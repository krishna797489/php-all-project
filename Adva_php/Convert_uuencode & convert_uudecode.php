<?php
$str="Hello world";
/* ye data ko encode ke throw secore krna */
$encodestring=convert_uuencode($str) ."<br>";
echo $encodestring;

/* bapas data unsecore krna */
$decodeString=convert_uudecode($encodestring);
echo $decodeString;




?>