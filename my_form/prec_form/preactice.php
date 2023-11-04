<?php 
include "database.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $username=$_POST['username'];
    $sql="INSERT INTO table_name (name,email,password,username) values {'$name'},{'$email'},{'$password'},{'$username'} ";

}



?>