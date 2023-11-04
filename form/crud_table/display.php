
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Display data</title>
</head>
<body>
    <div class="container my-5">
    <button class="btn btn-primary"><a href="insert.php" class="text-light">Add User</a></button>
    <?php
include "connection.php";
$sql="SELECT*FROM `student`";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    echo  '<table class="table">'; /* ye boostrap use kiya */
  echo  '<thead>';

   echo  '<tr>';
     echo   '<th scope="col">id</th>';
     echo  '<th scope="col">name</th>';
     echo '<th scope="col">email</th>';
     echo '<th scope="col">mobile</th>';
     echo '<th scope="col">Action</th>';
  echo  '</tr>';
 echo '</thead>';

 while($row=mysqli_fetch_assoc($result))
 {
   echo '<tbody>';
    echo '<tr>';
      echo '<th scope="row">'.$row['id'].'</th>';
      echo '<td>'.$row['name'].'</td>';
      echo '<td>'.$row['email'].'</td>';
      echo '<td>'.$row['mobile'].'</td>';
     echo '<td>
     <button class="btn btn-primary"><a href="update.php?id='.$row['id'].'" class="text-light">update</a></button>
     <button class="btn btn-primary"><a href="delete.php?id='.$row['id'].'" class="text-light">delete</a></button></td>';
   echo '</tr>';
  
 echo '</tbody>';
 }


echo '</table>';
}
    ?>
    </div>
</body>
</html>