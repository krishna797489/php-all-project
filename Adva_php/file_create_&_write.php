<?php
echo "welcome to write files in php";
$fptr=fopen("myfiles1.txt","w"); /* ye file create krne ke liye  */
fwrite($fptr,"Thise is the best file on thise planet.please don't argue with me on thise one.\n"); /*ye file me data write krne ke liye  */






?>