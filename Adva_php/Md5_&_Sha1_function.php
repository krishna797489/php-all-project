<?php
$str ="Hello";   /* ye password hea */
echo "The String :" . $str . "<br><br>";  /* ye string function hea */

echo "md5 Binary : " . md5($str,true) . "<br></br>"; /* isse binary form me data show kr skte hea */

 /* false value krne ki jarurat nhi hoti bo alwys defoult value hoti hea */

echo "md5 Hex : " . md5($str) . "<br></br>"; /* ye hex me show krega */

echo "sha1 Binary : " . sha1($str,true) . "<br></br>";

echo "sha1 HEX : " . sha1($str) . "<br></br>";


/* if else ke throw show krna */
$str="Hello";  /* enter the password */
if(md5($str)=="8b1a9953c4611296a827abf8c47804d7")
{
    echo "Password Matched";
}
else
{
    echo "password is not matched";
}
?>