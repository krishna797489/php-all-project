<?php include "header.php";

if($_SESSION["user_role"]=='0'){
    header("location: post.php");
}

include "config.php";
$id=$_GET['id'];
if(isset($_POST['sumbit'])){
    $cat_name=$_POST['cat_name'];
    echo $sql="UPDATE `category` SET `category_name` = '$cat_name' WHERE `category_id`=$id ";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:category.php');
    }
}

?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
              <?php
include "config.php";
$id=$_GET['id'];  /* ye form ke andar old deta show krne ke liey */
$sql1="SELECT*FROM `category` where category_id=$id ";
$result1=mysqli_query($conn,$sql1) or die("Query Failed.");
if(mysqli_num_rows($result1)>0){
    while($row=mysqli_fetch_assoc($result1)){


?>
                  <form action="#" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="cat_id"  class="form-control" value="<?php echo $row['category_id']; ?>" >
                      </div>
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat_name" class="form-control" value="<?php echo $row['category_name']; ?>"  placeholder="" required>
                      </div>
                      <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                  </form>
                  <?php }
                  } ?>
                </div>
              </div>
            </div>
          </div>
<?php include "footer.php"; ?>
