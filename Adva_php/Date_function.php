<?php


echo "Full Date " .date("d-m-Y") . "<br>";
echo "Today_Live TIME " .date("g:iA-s e") . "<br>";/* ye server ka time show krega */

date_default_timezone_set("Asia/Kolkata"); /* time zone set krne ke liye kis country ka time show krna */ 
/* ye india ka time show krega */
echo "Today_Live TIME " .date("g:iA-s e") . "<br>";
?>