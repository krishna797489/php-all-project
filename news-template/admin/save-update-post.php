<?php
include "config.php";
if(empty($_FILES['new-image']['name'])){
    $file_name=$_POST['old_image'];
}
else
{
    
    $errors=array();

    $file_name=$_FILES['new-image']['name'];   /* ye file ko upload krne ke liye super global variable ka use kiya */
    $file_size=$_FILES['new-image']['size'];
    $file_tmp=$_FILES['new-image']['tmp_name'];
    $file_type=$_FILES['new-image']['type'];
    $file_ext=end(explode ('.',$file_name));  /* ye explode krke nikala ki file ka last name kya hea */
    $extension=array("jpeg","jpg","png");  /* ye file chack kiya */
    if(in_array($file_ext,$extension)===false){  /* agar iske bahr upload hoti hea te ye call hoga */
        $errors[]="This Extension file not allowed, please a JPG or PNG files";
    }
    if($file_size>2097152){   /* agr file ka size jyada hoga to ye call hoga */
        $errors[]="File size must be 2mb or lower";
    }
    if(empty($errors)===true){  /* agr yha tak koi bi problem nhi ati hea upload krne me to file yha pr upload hogi */
        move_uploaded_file($file_tmp,"upload/".$file_name); /* ye upload kiya */
    }else
    {
        print_r($errors);
        die();
    }

}

$sql="UPDATE post set title='{$_POST["post_title"]}',description='{$_POST["postdesc"]}',category={$_POST["category"]},post_img='$file_name' where post_id={$_POST["post_id"]}";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location:post.php");
}
else
{
    echo "Query Failed.";
}






?>