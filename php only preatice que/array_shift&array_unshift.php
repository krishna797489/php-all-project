<?php
$fruit=["orange","banana","grapes"];
array_shift($fruit);    /* yese starting ki value show nhi krega */
array_unshift($fruit, "apple","mango"); /* yese starting me new value addn krega */
echo "<pre>";
print_r($fruit);
echo "</pre>";

?>