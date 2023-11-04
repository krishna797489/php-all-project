<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>TJ hotel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,900;1,400;1,600&display=swap" rel="stylesheet">
    <style>
       *{
           font-family: 'Poppins', sans-serif;
       }
       .h-font{
        font-family: 'Merienda', cursiva;
        
       }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-3 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">TJ HOTEL</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <div class="d-flex">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
        Login
        </button>
        <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#ragisterModal">
        Ragister
        </button>
      </div>
    </div>
  </div>
</nav>

 <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="">
            <div class="modal-header">
        <h5 class="modal-title d-flex align-item-center">
        <i class="bi bi-person-check-fill"></i>User Login
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" name="email" class="form-control shadow-none">
  </div>
   
      <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control shadow-none">
      </div>
   
    <div class="d-flex align-items-center justify-content-between mb-2">
        <button type="submit" class="btn btn-outline-dark shadow-none me-lg-2 me-3">Submit</button>
        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forget password?</a>
    </div>
      </div>
       </form>
    </div> 
  </div>
</div>

<div class="modal fade" id="ragisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="">
            <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center">
        <i class="bi bi-person-fill-add fs-2 me-3"></i>
         User Ragister
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <span class="badge rounder-pill bg-light text-dark mb-3 text-wrap lh-base">
      Note:Your details must match with your ID(Aadhar card, passport, driving license, etc.)
            that will be require during chack-in.
      </span>
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <label class="form-label p-0">Name</label>
                <input type="text" class="form-control shadow-none" placeholder="Enter your name">
            </div>
            <div class="col-md-6">
                <label class="form-label p-0">Email</label>
                <input type="email" class="form-control shadow-none" placeholder="Email@email.com">
            </div>
            <div class="col-md-6">
                <label class="form-label p-0">Phone Number</label>
                <input type="number" class="form-control shadow-none" placeholder="Phone Number">
            </div>
            <div class="col-md-6">
                <label class="form-label p-0">Picture</label>
                <input type="file" class="form-control shadow-none">
            </div>
            <div class="col-md-12 mb-3">
                <label class="form-label">Address</label>
                <textarea class="form-control shadow-none" rows="1" placeholder="Enter Full Address"></textarea>
            </div>
            <div class="col-md-6">
                <label class="form-label p-0">Pincode</label>
                <input type="number" class="form-control shadow-none" placeholder="Enter pincode">
            </div>
            <div class="col-md-6">
                <label class="form-label p-0">Date of birth</label>
                <input type="date" class="form-control shadow-none" placeholder="Enter your DOB">
            </div>
            <div class="col-md-6">
                <label class="form-label p-0">password</label>
                <input type="password" class="form-control shadow-none" placeholder="Create password">
            </div>
            <div class="col-md-6">
                <label class="form-label p-0"> Confirm password</label>
                <input type="password" class="form-control shadow-none" placeholder="Confirm password">
            </div>
        </div>
      </div>
       <!-- <div class="mb-3">
    
  </div>
      <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control shadow-none">
      </div>
    <div class="d-flex align-items-center justify-content-between mb-2">
        <button type="submit" class="btn btn-outline-dark shadow-none me-lg-2 me-3">Submit</button>
        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forrget password?</a>
    </div>  -->
      </div>
       </form>
    </div> 
  </div>
</div>

    



       
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>