<?php
include "conn.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>insert</title>
</head>
<body>
    <div class="container my-5">
    <form action="" method="">
    <div class="mb-3">
        <label for="examplename" class="form-control" >Name</label>
        <input type="text" name="name"  class="form-control">
    </div>
    </form>
    </div>
</body>
</html>