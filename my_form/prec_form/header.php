<?php
include "database.php";
session_start();
if(!isset($_SESSION["roll"])){
    header("log_in.php");
}

?>