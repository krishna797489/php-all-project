<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Display</title>
</head>
<body>
    <div class="container my-5">
            <button class="btn btn-primary"><a href="form.php" class="text-light">Add user</a></button>
            <?php
           /*  $limit=3; */
           /*  $page=$_GET['page']; */
           /*  if(isset($_GET['page'])){ */
           /*      $page=$_GET['page']; */
           /*  }else */
           /*  { */
           /*      $page=1; */
           /*  } */
           /*   $offset=($page-1)*$limit;  */
        $sql="SELECT*FROM student user" ;/* order by id desc limit {$offset},{$limit}"; */
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            ?>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">age</th>
      <th scope="col">gender</th>
      <th scope="col">city</th>
      <th scope="col">class</th>
      <th scope="col">subject</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    <?php while($row=mysqli_fetch_assoc($result)) 
    {    ?>

    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>  
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['age'] ?></td>
      <td><?php echo $row['gender'] ?></td>
      <td><?php echo $row['city'] ?></td>
      <td><?php echo $row['class'] ?></td>
      <td><?php if($row['subject']==0){
                echo "English";
      }
      else
      if($row['subject']==1){
        echo "Hindi";
      }
      else
      if($row['subject']==2){
        echo "Maths";
      }
      else
      if($row['subject']==3){
        echo "science";
      }
      ?>
      </td>
      <td>
     <button class="btn btn-primary"><a href="update.php?id=<?php echo $row['id'] ?>" class="text-light">update</a></button>
     <button class="btn btn-primary"><a href="delete.php?id=<?php echo $row['id'] ?>"class="text-light">delete</a></button>
    </td>
    </tr>
    <?php } ?>
    
  </tbody>
</table>
<?php

        }
       /*  
        $sql1="SELECT*FROM student";
        $result1=mysqli_query($conn,$sql1) or die("Query Failed.");
        if(mysqli_num_rows($result1)>0){
            $total_records=mysqli_num_rows($result1);
            $limit=3;
            $tota_page=ceil($total_records/$limit);
            echo '<ul class="pagination admin-pagination class="pagination">';
            for($i=1; $i<=$tota_page; $i++){
                echo '<li><a href="show.php?page='. $i .'">'. $i .'</a></li>';
            }
           echo '</ul>';
        } */
        ?>


    </div>
</body>
</html>