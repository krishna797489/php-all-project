<!-- ye secure file ke liye jese ki agar user bina log in kiye koi bi page nhi dek payega  -->
<?php
include "connection.php";
session_start();
if(!isset($_SESSION["username"])){
    header("location:login.php");
}

?>