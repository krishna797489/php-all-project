<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>display</title>
</head>
<body>
    <div class="container my-5"><button type="submit" class="btn btn-primary"><a href="Signup.php" class="text-light">Add user</a></button>
    <button type="submit" class="btn btn-primary"><a href="logout.php" class="text-light">Log Out</a></button>
    <?php
include "connection.php";

$sql="SELECT id,name,email,username FROM `form`";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)){
    ?>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">username</th>
    </tr>
  </thead>
  <tbody>
  <?php
  while($row=mysqli_fetch_assoc($result)){
    ?>
     <tr>
      <th scope="row"><?php echo $row['id']  ?></th>
      <td><?php echo $row['name']  ?></td>
      <td><?php echo $row['email']  ?></td>
      <td><?php echo $row['username']  ?></td>
    </tr>
 <?php } ?>
  </tbody>
</table>
<?php } ?>
    </div>
</body>
</html>
