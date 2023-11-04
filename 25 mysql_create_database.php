<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);


// Create a db
$sql = "create tables krishna";
$result = mysqli_query($conn, $sql);


  
?>
