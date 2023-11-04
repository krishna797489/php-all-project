<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   
    <div class="container my-5">
    <button class="btn btn-primary"><a href="form.php" class="text-light">Add User</a></button>
<?php
include "connect.php";

$sql="SELECT*FROM work";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    echo '<table class="table">';
  echo '<thead>';
   echo  "<tr>";
     echo '<th scope="col">id</th>';
     echo '<th scope="col">Name</th>';
     echo  '<th scope="col">Age</th>';
     echo '<th scope="col">Mobile</th>';
     echo '<th scope="col">Action</th>';
   echo "</tr>";
 echo '</thead>';
echo '<tbody>';

 while($row=mysqli_fetch_assoc($result)){
   
    
     echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo '<td>'.$row['name'].'</td>';
        echo '<td>'.$row['age'].'</td>';
        echo '<td>'.$row['mobile'].'</td>';
        echo '<td>
        <button class="btn btn-primary"><a href="edit.php?id='.$row['id'].'" class="text-light">Update</a></button>
        <button class="btn btn-primary"><a href="delete.php?id='.$row['id'].'" class="text-light">Delete</a></button>
        </td>';
      echo '</tr>';
 }
      
   echo '</tbody>';
 echo  '</table>';
 
}
?>
</div>
</body>
</html>




