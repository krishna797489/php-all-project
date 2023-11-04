<?php  include "header.php";   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>display</title>
</head>
<body>
    <div class="container">
        <a href="sign.php" class="btn btn-primary">Add user</a>
        <a href="logout.php" class="btn btn-primary">log out</a>
        <?php
        include "conection.php";
        $sql="SELECT id ,name ,username FROM persona";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            ?>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
    </tr>
  </thead>
    <tbody>
    <?php
    while($row=mysqli_fetch_assoc($result)){ ?>
    
   

<tr>
      <th scope="row"><?php echo $row['id']  ?></th>
      <td><?php echo $row['name']  ?></td>
      <td><?php echo $row['username']  ?></td>
     
    </tr>
    <?php } ?>
    


</tbody>
</table>

<?php } ?>
  </thead>
  
   
    </div>
</body>
</html>