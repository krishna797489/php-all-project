
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <title>Login Form</title>
</head>
<body style="background-color:darkmagenta">
    <div class="container">
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Login Form</h3>
            <form action="#" method="post" >
              <?php
                include "database.php";
                if(isset($_POST['submit'])){
                    $roll=$_POST['roll']; 
                    $Password=md5($_POST['Password']);
                    $sql="SELECT roll,Password FROM my_work WHERE roll='{$roll}' AND password='{$Password}'";
                    $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            session_start();
                            $_SESSION["roll"]=$row=["roll"];
                            header("location:show.php");
                        }
                    }
                    else
                    {
                        echo '<div class="alert alert-danger">Roll and password are not matched.</div>';
                    }

                }


        ?>
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" placeholder="Roll No" name="roll"  class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Roll No</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <input type="password"  placeholder="Password" name="Password" class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress">Password</label>
                  </div>
                </div>
            
              <div class="mt-0 pt-0">
                <input class="btn btn-outline-primary btn-lg" name="submit" type="submit" value="Submit" />
                <a class="btn btn-outline-primary btn-lg" href="student_sign.php">Sign in</a>
                <p class="h6">don't have any accout please sign in</p>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>
</body>
</html>