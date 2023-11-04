<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Display</title>
</head>
<body>
    <div class="container">
        <?php
        include "connection.php";
        $sql="SELECT id,name,age,username from student";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            ?>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">age</th>
      <th scope="col">username</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row=mysqli_fetch_assoc($result)){
        ?>
          <tr>
          <th scope="row"><?php echo $row['id'] ?></th>
          <td><?php echo $row['name'] ?></td>
          <td><?php echo $row['age'] ?></td>
          <td><?php echo $row['username'] ?></td>
          <td>
            <a class="btn btn-outline-primary" href="update.php?id=<?php echo $row['id']; ?>">edit</a>
            <a class="btn btn-outline-primary" href="delete.php?id=<?php echo  $row['id']; ?>">delete</a>
        </td>
        </tr>
       
      </tbody> <?php }
    ?>
        
    </table>
   


<?php
}
        ?>
    </div>
</body>
</html>