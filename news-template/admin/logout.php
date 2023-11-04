<?php
include "config.php";    /* ye logout page  */
session_start();


session_unset();

session_destroy();
header("location:index.php");








?>