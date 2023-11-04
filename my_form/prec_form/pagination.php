<?php
include "database.php";
$per_page=5;
$start=0;
$record=mysqli_num_rows(mysqli_query($conn,"SELECT id,student_name,class,roll FROM `my_work`"));
$pagi=ceil($record/$per_page);
$sql="SELECT id,student_name,class,roll FROM `my_work` limit $start,$per_page";
$result=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
      <ul class="list-group">
        <?php while($row=mysqli_fetch_assoc($result)){
        ?>
        <li class="list-group-item"></li>
       <?php } ?>
      </ul>
      <ul class="pagination mt-30">
        <?php for($i=1;$i<=$pagi;$i++){
        ?>
        <li class="page-item active"><a class="page-link" href="">1</a></li>
        <li class="page-item"><a class="page-link" href="">2</a></li>
        <li class="page-item"><a class="page-link" href="">3</a></li>
<?php }?>
      </ul>
   
    </div>
</body>
</html>