<?php

$fptr=fopen("preactice.php","r");
echo var_dump($fptr);
if(!$fptr)
{
    die("Unable to open thise file.Please enter a valid filename");
}
$content=fread($fptr,filesize("preactice.php"));
echo $content;







?>