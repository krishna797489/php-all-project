<?php

echo "Time & Date: " .date("d-m-y h:i:sq")."<br><br>";

echo date ("l d-m-y", mktime(0,0,0,10,15, 2023)). "<br><br>";
echo date("l d-m-Y",gmmktime(0,0,0,10,15,2003));




?>