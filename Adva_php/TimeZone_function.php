<?php
/* time zone set krne ke liye */
date_default_timezone_set("Asia/Kolkata")."<br><br>";
echo date_default_timezone_get()."<br><br>";

/*time zone set krne ke liye  */
$tz=timezone_open("Asia/Kolkata");
echo timezone_name_get($tz);

/* time zone location set krne ke liye */
echo "<pre>";
print_r(timezone_location_get($tz));
echo "</pre>";

/* time zone list chack krne ke liye */
echo "<pre>";
print_r(timezone_identifiers_list());
echo "</pre>";
?>