<?php
include "conection.php";
session_start();
if(!isset($_SERVER["username"])){
    header("location:login.php");
}







?>