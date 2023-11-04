<?php
/* array ke throw date show krna */
echo "<pre>";
print_r(date_parse("2015-03-15 12:30:25.5"));
echo "</pre>";

$date=date_parse("2015-03-15 12:30:25.5");
echo $date['day'];




?>