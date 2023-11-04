<?php

$str="Hello <b>Wolrd</b>, Hello <i>Earth</i>";
echo strip_tags($str)."<br>";/* isme jo bold tag lage huye hea bo hath jayega */

echo wordwrap($str,4,"<br>",true);/* isme ye jo world hea 4se jyada pr break ho jayega  */




?>