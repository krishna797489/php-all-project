
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
      
        <a class="btn btn-outline-primary" href="student_sign.php">Add user</a>
        <a class="btn btn-outline-danger" href="log_out.php">Log out</a>
        <?php
        include "header.php";
        include "database.php";
        $sql="SELECT id,student_name,class,roll FROM `my_work`";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){

?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Student_name</th>
      <th scope="col">Class</th>
      <th scope="col">Roll No</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
   <tbody>
  <?php 
  while($row=mysqli_fetch_assoc($result)){  ?>
     <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['student_name'] ?></td>
      <td>
        <?php
          if($row['class']==0){
            echo "8th";
             } else
             if($row['class']==1){
                echo "9th";
             }else
             if($row['class']==2){
                echo "10th";
             }else
             if($row['class']==3){
                echo "11th";
             }
             if($row['class']==4){
                echo "12th";
             } 
              ?>
             </td>
      <td><?php echo $row['roll']; ?></td>
      <td><a class="btn btn-outline-primary" href="edit.php?id=<?php echo $row['id']; ?>" >Edit</a>
      <a class="btn btn-outline-danger" href="delete.php?id=<?php echo $row['id']; ?>"  >delete</a></td>
     

      
    </tr>
<?php
  }
  ?> 
 </tbody>
</table>

        <?php } ?>

    </div>
</body>
</html>