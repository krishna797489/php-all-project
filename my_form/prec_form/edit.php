                    <?php
                include "database.php";
                $id=$_GET['id'];
                if((isset($_POST['submit']))){
                    $student_name=$_POST['student_name'];
                    $class=$_POST['class'];
                    $roll=$_POST['roll'];
                    $sql="SELECT roll from my_work where roll='{$roll}'"; 
                    $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                         echo '<div class="alert alert-danger">old roll no nd new roll is same.</div>';
                    }
                    else
                    {
                        $sql1="UPDATE `my_work` SET `student_name` = '{$student_name}', `class` = '{$class}',
                         `roll` = '{$roll}' WHERE `my_work`.`id` = $id";
                        $result1=mysqli_query($conn,$sql1);
                        if($result1){
                          header('location:show.php');
                        }
                    }
                    }
                    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>edit</title>
</head>
<body style="background-color:darkmagenta">
    <div class="container">
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Update form</h3>
             <?php 
                        $id=$_GET['id'];
                        $sql2="SELECT * FROM `my_work` WHERE `id`='$id' ";
                        $result2=mysqli_query($conn,$sql2);
                        if( $row=mysqli_fetch_assoc($result2)){ 
                    
                ?> 
            <form action="#" method="post" >
              <div class="row">
                
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="student_name"  placeholder="student Name" class="form-control form-control-lg" value="<?php echo $row['student_name']; ?>" />
                    <label class="form-label" for="firstName">student Name</label>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-12">
                  <select  name="class" value="<?php echo $row['class']; ?>" class="select form-control-lg">
                    <option  disabled>Choose option</option>
                    <option value="0">8th</option>
                    <option value="1">9th</option>
                    <option value="2">10th</option>
                    <option value="3">11th</option>
                    <option value="4">12th</option>
                  </select>
                  <label class="form-label select-label">Choose your Class</label>
                </div>
              </div><br>

              
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" placeholder="Roll" value="<?php echo $row['roll']; ?>" name="roll"  class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Roll No</label>
                  </div>
                </div>
              </div>

            
              <div class="mt-0 pt-1">
                <input class="btn btn-outline-primary" name="submit" type="submit" value="Submit">
              </div>

            </form>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>
</body>
</html>