<?php
$str="A 'quote' is <b>bold</b>";
$str='<a href="https://www.krishna_kush.net">Krishna kush Website</a> ';

/* echo $str ."<br><br>"; */
/* echo htmlentities($str,ENT_QUOTES); */
/* echo htmlspecialchars($str,ENT_NOQUOTES); */
/* $htmlent=htmlentities($str,ENT_NOQUOTES); */
$htmlent=htmlspecialchars($str,ENT_QUOTES);
echo $htmlent;


echo htmlspecialchars_decode($htmlent);



/* agr array ke throw dekna ho konse konse quotes lage huye hea */
echo "<pre>";
print_r(get_html_translation_table(HTML_SPECIALCHARS));
echo "</pre>"




?>